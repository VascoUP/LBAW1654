DROP TABLE IF EXISTS Comment CASCADE;
DROP TABLE IF EXISTS Iteration CASCADE;
DROP TABLE IF EXISTS Notification CASCADE;
DROP TABLE IF EXISTS Project CASCADE;
DROP TABLE IF EXISTS ProjectCoordinator CASCADE;
DROP TABLE IF EXISTS ProjectUsers CASCADE;
DROP TABLE IF EXISTS Report CASCADE;
DROP TABLE IF EXISTS Tag CASCADE;
DROP TABLE IF EXISTS TagProject CASCADE;
DROP TABLE IF EXISTS Task CASCADE;
DROP TABLE IF EXISTS TaskUser CASCADE;
DROP TABLE IF EXISTS Thread CASCADE;
DROP TABLE IF EXISTS UserSite CASCADE;

DROP TYPE IF EXISTS TaskStatus;
DROP TYPE IF EXISTS UserStatusProject;
DROP TYPE IF EXISTS ProjectStatus;
DROP TYPE IF EXISTS UserStatus;
DROP TYPE IF EXISTS ReportStatus;
DROP TYPE IF EXISTS NotificationStatus;

CREATE TYPE TaskStatus AS ENUM('active', 'completed', 'unassigned');
CREATE TYPE UserStatusProject AS ENUM('inactive', 'active', 'invited');
CREATE TYPE ProjectStatus AS ENUM('finished', 'working');
CREATE TYPE UserStatus AS ENUM('active', 'inactive', 'banned');
CREATE TYPE ReportStatus AS ENUM('waiting', 'handled');
CREATE TYPE NotificationStatus AS ENUM('waiting', 'read');

CREATE TABLE Project
(
	projectID serial PRIMARY KEY,
	name varchar(50) NOT NULL,
	description varchar(100) NOT NULL,
	access boolean NOT NULL DEFAULT(TRUE)
);

CREATE TABLE Iteration
(
	iterationID serial PRIMARY KEY,
	projectID integer NOT NULL,
	description varchar(100) NOT NULL,
	startDate date NOT NULL,
	dueDate date,
	maximumEffort int NOT NULL DEFAULT(1), 
	FOREIGN KEY(projectID) REFERENCES Project(projectID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	CHECK(maximumEffort >= 1 AND maximumEffort <= 100 AND startDate <= dueDate)
);

CREATE TABLE Task
(
	taskID serial PRIMARY KEY,
	iterationID integer NOT NULL,
	priority integer NOT NULL,
	description varchar(100),
	name varchar(50) NOT NULL,
	effort int NOT NULL DEFAULT(0),
	taskStatus TaskStatus NOT NULL DEFAULT('unassigned'),
	FOREIGN KEY(iterationID) REFERENCES Iteration(iterationID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	CHECK(effort >= 0 AND effort <= 100 AND priority >= 1 AND priority <= 10)
);

CREATE TABLE Thread
(
	threadID serial PRIMARY KEY,
	projectID integer NOT NULL,
	title varchar(50) NOT NULL,
	date date NOT NULL,
	FOREIGN KEY(projectID) REFERENCES Project(projectID)
				ON DELETE SET NULL
				ON UPDATE CASCADE
);

CREATE TABLE UserSite
(
	userID serial PRIMARY KEY,
	username varchar(50) NOT NULL,
	email varchar(50) NOT NULL,
	password varchar(50) NOT NULL,
	photo boolean DEFAULT(FALSE),
	description varchar(100),
	curriculumVitae boolean DEFAULT(FALSE),
	type varchar(50) NOT NULL,
	userStatus UserStatus NOT NULL DEFAULT('active')
);

CREATE TABLE Report
(
	reportID serial PRIMARY KEY,
	threadID integer,
	taskID integer,
	userID integer,
	reportDate date NOT NULL,
	handledDate date,
	reportStatus ReportStatus NOT NULL DEFAULT('waiting'),
	FOREIGN KEY(threadID) REFERENCES Thread(threadID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	FOREIGN KEY(taskID) REFERENCES Task(taskID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE,
	CHECK(reportDate <= handledDate)
);

CREATE TABLE Comment
(
	commentID serial PRIMARY KEY,
	taskID integer,
	threadID integer,
	userID integer NOT NULL,
	reportID integer,
	content varchar(500) NOT NULL,
	date date NOT NULL,
	FOREIGN KEY(taskID) REFERENCES Task(taskID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	FOREIGN KEY(threadID) REFERENCES Thread(threadID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE,
	FOREIGN KEY(reportID) REFERENCES Report(reportID)
				ON DELETE SET NULL
				ON UPDATE CASCADE
);

CREATE TABLE Notification
(
	notificationID serial PRIMARY KEY,
	reportID integer,
	taskID integer,
	commentID integer,
	notificationDate date NOT NULL,
	content varchar(100) NOT NULL,
	notificationStatus NotificationStatus NOT NULL DEFAULT('waiting'),
	FOREIGN KEY(reportID) REFERENCES Report(reportID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	FOREIGN KEY(taskID) REFERENCES Task(taskID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	FOREIGN KEY(commentID) REFERENCES Comment(commentID)
				ON DELETE SET NULL
				ON UPDATE CASCADE
);

CREATE TABLE ProjectCoordinator
(
	userID serial,
	projectID serial,
	startDate date NOT NULL,
	endDate date,
	projectStatus ProjectStatus NOT NULL DEFAULT('working'),
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE,
	FOREIGN KEY(projectID) REFERENCES Project(projectID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	PRIMARY KEY(userID, projectID)
);

CREATE TABLE ProjectUsers
(
	userID serial,
	projectID serial,
	invitedate date NOT NULL,
	userStatusProject UserStatusProject NOT NULL DEFAULT('invited'),
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE,
	FOREIGN KEY(projectID) REFERENCES Project(projectID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	PRIMARY KEY(userID, projectID)
);

CREATE TABLE Tag
(
	tagID serial PRIMARY KEY,
	name varchar(50) NOT NULL
);

CREATE TABLE TagProject
(
	tagID serial,
	projectID serial,
	FOREIGN KEY(tagID) REFERENCES Tag(tagID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	FOREIGN KEY(projectID) REFERENCES Project(projectID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	PRIMARY KEY(tagID, projectID)
);

CREATE TABLE TaskUser
(
	taskID serial,
	userID serial,
	FOREIGN KEY(taskID) REFERENCES Task(taskID)
				ON DELETE SET NULL
				ON UPDATE CASCADE,
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE,
	PRIMARY KEY(taskID, userID)
);

DROP INDEX IF EXISTS idxUserName;
DROP INDEX IF EXISTS idxUserStatus;
DROP INDEX IF EXISTS idxProjName;
DROP INDEX IF EXISTS idxIteration;
DROP INDEX IF EXISTS idxStatusTask;
DROP INDEX IF EXISTS idxReportStatus;
DROP INDEX IF EXISTS idxProjectStatus;
DROP INDEX IF EXISTS idxUserStatusProject;

CREATE INDEX idxUserName ON UserSite USING hash(username);
CREATE INDEX idxProjName ON Project USING hash(name);
CREATE INDEX idxEmail ON UserSite USING hash(email);
CREATE INDEX idxPassword ON UserSite USING hash(password);
CREATE INDEX idxUserStatus ON UserSite USING hash(userStatus);
CREATE INDEX idxStatusTask ON Task USING hash(taskStatus);
CREATE INDEX idxReportStatus ON Report USING btree(reportStatus);
CREATE INDEX idxProjectStatus ON ProjectCoordinator USING btree(projectStatus);
CREATE INDEX idxUserStatusProject ON ProjectUsers USING hash(userStatusProject);

CLUSTER Report USING idxReportStatus;
CLUSTER ProjectCoordinator USING idxProjectStatus;

INSERT INTO Project(projectID, name, description, access) VALUES (1, 'MathProject', 'Awesome calculator developed in C++', true);
INSERT INTO Project(projectID, name, description, access) VALUES (2, 'Aelius', 'Restaurant guide developed in HTML', false);
INSERT INTO Project(projectID, name, description, access) VALUES (3, 'Zombie Attack', 'Zombie game developed in C', false);
INSERT INTO Project(projectID, name, description, access) VALUES (4, 'Organizer', 'A project on developing a task scheduler in JavaScript', false);
INSERT INTO Project(projectID, name, description, access) VALUES (5, 'The Pianist', 'An indie movie developed by a small team', false);
INSERT INTO Project(projectID, name, description, access) VALUES (6, 'Surfer Shack', 'Construction of a surfing school in Cascais', false);
INSERT INTO Project(projectID, name, description, access) VALUES (7, 'Music School', 'Independent Music school project', false);

INSERT INTO Iteration(iterationID, projectID, description, startDate, maximumEffort) VALUES (1, 1, 'Week #1', '2017-01-08', 40);
INSERT INTO Iteration(iterationID, projectID, description, startDate, dueDate, maximumEffort) VALUES (2, 2, 'Iteration 1', '2017-02-01', '2017-02-09', 90);
INSERT INTO Iteration(iterationID, projectID, description, startDate, maximumEffort) VALUES (3, 2, 'Iteration 2', '2017-03-10', 10);
INSERT INTO Iteration(iterationID, projectID, description, startDate, dueDate, maximumEffort) VALUES (4, 3, 'Tasks week 1', '2017-03-17', '2017-03-25', 30);
INSERT INTO Iteration(iterationID, projectID, description, startDate, dueDate, maximumEffort) VALUES (5, 4, 'First Week', '2017-05-1', '2017-05-07', 30);
INSERT INTO Iteration(iterationID, projectID, description, startDate, dueDate, maximumEffort) VALUES (6, 5, 'First Take', '2017-03-17', '2017-03-25', 30);
INSERT INTO Iteration(iterationID, projectID, description, startDate, dueDate, maximumEffort) VALUES (7, 6, 'Week One', '2017-05-1', '2017-05-07', 50);
INSERT INTO Iteration(iterationID, projectID, description, startDate, maximumEffort) VALUES (8, 7, 'Week 1', '2017-02-02', 10);


INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (1, 1, 1, 'We need to implement the sum operation', 'Sum opperation', 10, 'active');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (2, 1, 1, 'We need to implement the minus operation', 'Minus opperation', 10, 'active');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (3, 1, 2, 'We need to implement the divison operation', 'Divison opperation', 8, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (4, 1, 2, 'We need to implement the multiplication operation', 'Multiplication opperation', 8, 'completed');

INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (5, 2, 1, 'Implement the the edit profile', 'Edit profile', 5, 'active');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (6, 2, 1, 'Implement the restaurant main page', 'Restaurant page', 20, 'active');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (7, 2, 1, 'Implement the search page', 'Search page', 10, 'active');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (8, 2, 2, 'Implement the edit restaurant page', 'Edit restaurant edit page', 5, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (9, 2, 2, 'Implement the restaurant menu page', 'Menu page', 15, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (10, 2, 3, 'Implement a search organizer', 'Search organizer', 5, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (11, 2, 4, 'Implement a top 5 restaurants', 'Top5', 5, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (12, 2, 5, 'CSS review', 'CSS', 10, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (13, 2, 10, 'Site main page', 'Main page', 20, 'completed');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (14, 2, 10, 'Create login', 'Login', 10, 'completed');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (15, 2, 10, 'Create register', 'Register', 10, 'completed');

INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (16, 3, 1, 'JavaScript to login', 'JavScript login', 10, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (17, 3, 1, 'JavaScript to register', 'Sum opperation', 10, 'unassigned');

INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (18, 4, 10, 'Start the main class', 'Main class', 10, 'completed');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (19, 4, 10, 'Start the game class', 'Game class', 10, 'completed');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (20, 4, 10, 'Draw the characters', 'Characters', 10, 'completed');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (21, 4, 10, 'Draw the background', 'Background', 10, 'completed');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (22, 4, 10, 'State machine', 'State machine', 10, 'completed');

INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (23, 5, 10, 'Draw the background', 'Background', 10, 'completed');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (24, 5, 10, 'State machine', 'State machine', 10, 'completed');

INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (25, 6, 10, 'Purchase 5 cameras and props', 'Purchase Equipment', 10, 'active');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (26, 6, 10, 'Buy 3 microphones', 'Obtain Microphones', 5, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (27, 6, 1, 'Fix the directors chair', 'Fixing Instruments', 5, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (28, 6, 3, 'Review actor roles', 'Review Roles', 20, 'completed');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (29, 6, 5, 'Begin movie production', 'Start Recording', 20, 'completed');

INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (30, 7, 5, 'Buy materials for construction','Buy Materials', 10, 'active');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (31, 7, 5, 'Start Foundation work', 'Lay the foundation for the building', 5, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (32, 7, 5, 'Assert last minute details about the construction', 'Finish contruction plan', 5, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (33, 7, 10, 'Use social networks to find new participants for the project', 'Find Volunteers', 10, 'completed');

INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (34, 8, 4, 'Purchase some violins and flutes', 'Purchase Equipment', 10, 'active');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (35, 8, 10, 'Initiate Recorder Lessons', 'Recorcer lessons', 5, 'unassigned');
INSERT INTO Task(taskID, iterationID, priority, description, name, effort, taskStatus) VALUES (36, 8, 3, 'Distribute the music sheets', 'Assing Sheets', 5, 'unassigned');


INSERT INTO Thread(threadID, projectID, title, date) VALUES (1, 1, 'I cant print the operation result', '2017-03-22');
INSERT INTO Thread(threadID, projectID, title, date) VALUES (2, 1, 'I cant import the project', '2017-03-25');
INSERT INTO Thread(threadID, projectID, title, date) VALUES (3, 2, 'Background image doesnt load', '2017-02-11');
INSERT INTO Thread(threadID, projectID, title, date) VALUES (4, 3, 'Zombies are crazy', '2017-03-25');
INSERT INTO Thread(threadID, projectID, title, date) VALUES (5, 7, 'Where to buy flutes!?', '2017-02-23');
INSERT INTO Thread(threadID, projectID, title, date) VALUES (6, 3, 'Running in virtualBox scenario', '2017-03-12');
INSERT INTO Thread(threadID, projectID, title, date) VALUES (7, 5, 'Camera no2 will not work', '2017-03-26');
INSERT INTO Thread(threadID, projectID, title, date) VALUES (8, 6, 'I have no surf board, please help', '2017-05-05');
INSERT INTO Thread(threadID, projectID, title, date) VALUES (9, 4, 'How to use a state machine in C', '2017-03-26');
INSERT INTO Thread(threadID, projectID, title, date) VALUES (10, 7, 'Should we repaint the piano keys?', '2017-02-05');


INSERT INTO UserSite(userID, username, email, password, photo, description, curriculumVitae, type, userStatus) VALUES (1, 'METRAP', 'metrap@gmail.com', 'metaBoss', true, 'I like to play games', true, 'coordinator', 'active');
INSERT INTO UserSite(userID, username, email, password, photo, curriculumVitae, type, userStatus) VALUES (2, 'nikki', 'nikki45@gmail.com', 'nikki89765', false, false, 'coordinator', 'active');
INSERT INTO UserSite(userID, username, email, password, photo, curriculumVitae, type, userStatus) VALUES (3, 'adminYM', 'adminYM@gmail.com', 'adminYM', true, false, 'administrator', 'active');
INSERT INTO UserSite(userID, username, email, password, photo, description, curriculumVitae, type, userStatus) VALUES (4, 'sfcf', 'sfcf@hotmail.com', 'sfcf199612', true, 'A beautiful butterfly', true, 'user', 'active');
INSERT INTO UserSite(userID, username, email, password, photo, curriculumVitae, type, userStatus) VALUES (5, 'ymUser', 'ymUser@gmail.com', '12345ym67890', true, false, 'user', 'active');
INSERT INTO UserSite(userID, username, email, password, photo, curriculumVitae, type, userStatus) VALUES (6, 'vanFree', 'vanFree@gmail.com', 'vanFreevfvf', false, false, 'user', 'inactive');
INSERT INTO UserSite(userID, username, email, password, photo, curriculumVitae, type, userStatus) VALUES (7, 'hisa', 'hisa@hotmail.com', 'hisa1234', true,  false, 'coordinator', 'active');
INSERT INTO UserSite(userID, username, email, password, photo, description, curriculumVitae, type, userStatus) VALUES (8, 'ruteMarlene', 'rute_marlene@gmail.com', 'rutinha', true, 'I like to draw and paint', true, 'user', 'active');
INSERT INTO UserSite(userID, username, email, password, photo, description, curriculumVitae, type, userStatus) VALUES (9, 'mariaLeal', 'maryLinda@gmail.com', 'maryTheLinda', true, 'I like to sing and help others', false, 'user', 'active');

INSERT INTO Report(reportID, threadID, reportDate, reportStatus) VALUES (1,1,'2017-03-29', 'waiting');
INSERT INTO Report(reportID, userID, reportDate, reportStatus) VALUES (2,6,'2017-02-01', 'waiting');
INSERT INTO Report(reportID, taskID, reportDate, reportStatus) VALUES (3,20,'2017-02-04', 'waiting');

INSERT INTO Comment(commentID, taskID, userID, date, content) VALUES (1,3,2,'2017-02-02', 'Which libraries can we use?');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (2,4,1,'2017-04-26', 'All of them!');
INSERT INTO Comment(commentID, taskID, userID, date, content) VALUES (3,16,5, '2017-02-02', 'This sounds boring!');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (4,4,3,'2017-03-01', 'Have you tried running: sudo shutdown now ?');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (5,5,5,'2017-02-23', 'Have you tried the closest music store?');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (6,5,3,'2017-02-24', 'Yes but they do not have any!');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (7,6,9,'2017-03-12', 'Yes it is possible!');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (8,8,2,'2017-05-06', 'Sorry I cannot help you!');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (9,8,1,'2017-05-07', 'I think I can help you with that');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (10,7,2,'2017-03-26', 'You need to take it to John!!');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (11,10,8,'2017-02-05', 'I think we should!');
INSERT INTO Comment(commentID, threadID, userID, date, content) VALUES (12,10,1,'2017-02-05', 'Would that damage the piano?');


INSERT INTO Notification(notificationID, reportID, notificationDate, content, notificationStatus) VALUES (1,1,'2017-03-29', 'You have been reported', 'waiting');
INSERT INTO Notification(notificationID, taskID, notificationDate, content, notificationStatus) VALUES (2,1,'2017-02-05', 'You have been assigned to a task', 'waiting');
INSERT INTO Notification(notificationID, commentID, notificationDate, content, notificationStatus) VALUES (3,1,'2017-01-01', 'Someone commented on your thread', 'waiting');
INSERT INTO Notification(notificationID, reportID, notificationDate, content, notificationStatus) VALUES (4,1,'2017-02-22', 'You have been reported', 'waiting');


INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (6,1,'2017-01-01','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (3,7,'2017-02-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (1,7,'2017-03-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (2,7,'2017-03-12','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (4,7,'2017-02-10','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (5,7,'2017-01-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (8,7,'2017-01-02','2017-12-25','working');

INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (1,1,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (2,1,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (3,1,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (4,1,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (1,2,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (2,2,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (3,2,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (4,2,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (1,3,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (2,3,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (3,3,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (4,3,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (1,4,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (2,4,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (3,4,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (4,4,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (1,5,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (2,5,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (1,6,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (2,6,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (1,7,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (2,7,'2017-01-02','active');

INSERT INTO Tag(tagID, name) VALUES (1,'Music');
INSERT INTO Tag(tagID, name) VALUES (2,'Programming');
INSERT INTO Tag(tagID, name) VALUES (3,'Building');
INSERT INTO Tag(tagID, name) VALUES (4,'Independent');
INSERT INTO Tag(tagID, name) VALUES (5,'Volunteering');
INSERT INTO Tag(tagID, name) VALUES (6,'Education');
INSERT INTO Tag(tagID, name) VALUES (7,'Social');
INSERT INTO Tag(tagID, name) VALUES (8,'Construction');

INSERT INTO TagProject(tagID, projectID) VALUES (2,1);
INSERT INTO TagProject(tagID, projectID) VALUES (3,1);
INSERT INTO TagProject(tagID, projectID) VALUES (2,2);
INSERT INTO TagProject(tagID, projectID) VALUES (7,2);
INSERT INTO TagProject(tagID, projectID) VALUES (2,3);
INSERT INTO TagProject(tagID, projectID) VALUES (4,3);
INSERT INTO TagProject(tagID, projectID) VALUES (4,4);
INSERT INTO TagProject(tagID, projectID) VALUES (1,5);
INSERT INTO TagProject(tagID, projectID) VALUES (4,6);
INSERT INTO TagProject(tagID, projectID) VALUES (3,6);
INSERT INTO TagProject(tagID, projectID) VALUES (7,6);
INSERT INTO TagProject(tagID, projectID) VALUES (3,7);
INSERT INTO TagProject(tagID, projectID) VALUES (1,7);
INSERT INTO TagProject(tagID, projectID) VALUES (8,2);

INSERT INTO TaskUser(taskID, userID) VALUES (1,1);
INSERT INTO TaskUser(taskID, userID) VALUES (2,4);
INSERT INTO TaskUser(taskID, userID) VALUES (5,1);
INSERT INTO TaskUser(taskID, userID) VALUES (6,3);
INSERT INTO TaskUser(taskID, userID) VALUES (7,2);
INSERT INTO TaskUser(taskID, userID) VALUES (25,2);
INSERT INTO TaskUser(taskID, userID) VALUES (25,1);
INSERT INTO TaskUser(taskID, userID) VALUES (30,1);
INSERT INTO TaskUser(taskID, userID) VALUES (34,2);

CREATE OR REPLACE FUNCTION addTask()
	RETURNS TRIGGER AS $addTask$
BEGIN
	IF EXISTS
	(	SELECT NEW.taskID FROM Task
		WHERE NEW.taskID = Task.taskID
		LIMIT 1
	)
	THEN
		RAISE EXCEPTION 'This task already exists';
		RETURN NULL;
	END IF;
	RETURN NEW;
END;
$addTask$ LANGUAGE plpgsql;

CREATE TRIGGER checkAddTask
BEFORE INSERT ON Task
FOR EACH ROW
EXECUTE PROCEDURE addTask();

CREATE OR REPLACE FUNCTION addIteration()
	RETURNS TRIGGER AS $addIteration$
BEGIN
	IF EXISTS
	(	SELECT NEW.iterationID FROM Iteration
		WHERE NEW.iterationID = Iteration.iterationID
		LIMIT 1
	)
	THEN
		RAISE EXCEPTION 'This iteration already exists';
		RETURN NULL;
	END IF;
	RETURN NEW;
END;
$addIteration$ LANGUAGE plpgsql;

CREATE TRIGGER checkAddIteration
BEFORE INSERT ON Iteration
FOR EACH ROW
EXECUTE PROCEDURE addIteration();

CREATE OR REPLACE FUNCTION addUser()
	RETURNS TRIGGER AS $addUser$
BEGIN
	IF EXISTS
	(	SELECT NEW.userID FROM UserSite
		WHERE NEW.userID = UserSite.userID
		LIMIT 1
	)
	THEN
		RAISE EXCEPTION 'This user already exists';
		RETURN NULL;
	END IF;
	RETURN NEW;
END;
$addUser$ LANGUAGE plpgsql;

CREATE TRIGGER checkAddUser
BEFORE INSERT ON UserSite
FOR EACH ROW
EXECUTE PROCEDURE addUser();

CREATE OR REPLACE FUNCTION addProject()
	RETURNS TRIGGER AS $addProject$
BEGIN
	IF EXISTS
	(	SELECT NEW.projectID FROM Project
		WHERE NEW.projectID = Project.projectID
		LIMIT 1
	)
	THEN
		RAISE EXCEPTION 'This project already exists';
		RETURN NULL;
	END IF;
	RETURN NEW;
END;
$addProject$ LANGUAGE plpgsql;

CREATE TRIGGER checkAddProject
BEFORE INSERT ON Project
FOR EACH ROW
EXECUTE PROCEDURE addProject();

SELECT Project.projectID AS "Project ID", Project.name AS "Project name", Tag.name AS "Tag name"
FROM Project, Tag, TagProject
WHERE Project.projectID = TagProject.projectID
AND Tag.tagID = TagProject.tagID
ORDER BY Project.projectID;

SELECT Project.projectID AS "Project ID", Project.name AS "Project name", User1.userID AS "Coodinator ID", User1.username AS "Coordinator name", User2.userID AS "Collaborator ID", User2.username AS "Collaborator name"
FROM Project, ProjectCoordinator, ProjectUsers, UserSite User1, UserSite User2
WHERE ProjectCoordinator.userID = User1.userID
AND Project.projectID = ProjectCoordinator.projectID
AND ProjectUsers.userID = User2.userID
AND Project.projectID = ProjectUsers.projectID
ORDER BY Project.projectID;

SELECT userID AS "User ID", username AS "Username", email AS "Email", type AS "User type"
FROM UserSite
ORDER BY type;

SELECT type AS "User Type", count(*) AS "Number of users"
FROM UserSite
GROUP BY type;

SELECT Project.projectID AS "Project ID", Iteration.description AS "Iteration description", Iteration.startDate AS "Start date", Iteration.dueDate AS "Due date", Task.name AS "Task name", Task.description AS "Task description"
FROM Project, Iteration, Task
WHERE Iteration.projectID = Project.projectID
AND Task.iterationID = Iteration.iterationID
ORDER BY Project.projectID;

SELECT Project.projectID AS "Project ID", Project.name AS "Project name", count(Iteration.iterationID) AS "Number of iterations", count(Task.taskID) AS "Number of tasks"
FROM Project, Iteration, Task
WHERE Iteration.projectID = Project.projectID
AND Task.iterationID = Iteration.iterationID
GROUP BY Project.projectID;

SELECT UserSite.userID AS "User ID", Notification.content AS "Notification content"
FROM UserSite, Notification, Task, TaskUser, Comment, Report
WHERE (Task.taskID = Notification.taskID AND TaskUser.taskID = Task.taskID AND UserSite.userID = TaskUser.userID)
OR (Comment.taskID = Notification.commentID AND UserSite.userID = Comment.userID)
OR (Report.reportID = Notification.reportID AND UserSite.userID = Report.userID)
ORDER BY UserSite.userID;

SELECT Project.projectID AS "Project ID", title AS "Thread title", content AS "Comment content"
FROM Thread, Project, Comment
WHERE Project.projectID = Thread.projectID
AND Comment.threadID = Thread.threadID
ORDER BY Project.projectID;

UPDATE UserSite
    SET username = 'nikki2'
    WHERE userID = 2;
UPDATE UserSite
    SET email = 'pinkflower3@outlook.com'
    WHERE userID = 7;
UPDATE UserSite
    SET password = 'rutinha1'
    WHERE userID = 8;
UPDATE UserSite
    SET userStatus = 'banned'
    WHERE userID = 1;

UPDATE Project
    SET name = 'AmathProject'
    WHERE projectID = 1;
UPDATE Project
    SET description = 'Zombie game developed in prolog'
    WHERE projectID = 3;
UPDATE Project
    SET access = false
    WHERE projectID = 3;

UPDATE Iteration
    SET dueDate = '2017-02-10', maximumEffort = 85
    WHERE iterationID = 1;
UPDATE Iteration
    SET description = 'Iteration 2 - Easter week', maximumEffort = 85
    WHERE iterationID = 3;

UPDATE Task
    SET description = 'fix director chair and bring him coffee', name = 'Fix furniture'
    WHERE taskID = 33;
UPDATE Task
    SET priority = 2
    WHERE taskID = 22;
UPDATE Task
    SET effort = 4
    WHERE taskID = 16;
UPDATE Task
    SET taskStatus = 'completed'
    WHERE taskID = 10;

UPDATE Thread
    SET title = 'Background image (.jpg) doesnt load'
    WHERE ThreadID = 3;

UPDATE Comment
    SET content = 'I can help!'
    WHERE commentID = 1;

UPDATE Report
    SET reportStatus = 'handled'
    WHERE reportID = 1;

UPDATE Notification
    SET NotificationStatus = 'read'
    WHERE notificationID = 1;

UPDATE ProjectCoordinator
    SET endDate = '2017-03-27', projectStatus = 'finished'
    WHERE userID = 1;
UPDATE ProjectUsers
    SET userStatusProject = 'inactive'
    WHERE userID = 1;

	
CREATE OR REPLACE FUNCTION updateProject()
	RETURNS TRIGGER AS $updateProject$
BEGIN
	UPDATE Project
	SET Project.name = NEW.name, Project.description = NEW.description, Project.access = NEW.access
	WHERE Project.projectID = NEW.projectID;
END;
$updateProject$ LANGUAGE plpgsql;

CREATE TRIGGER checkUpdateProject
AFTER UPDATE ON Project
FOR EACH ROW
EXECUTE PROCEDURE updateProject();

CREATE OR REPLACE FUNCTION updateUser()
	RETURNS TRIGGER AS $updateUser$
BEGIN
	UPDATE UserSite
	SET UserSite.username = NEW.username, UserSite.email = NEW.email, UserSite.password = NEW.password
	WHERE UserSite.userID = NEW.userID;
END;
$updateUser$ LANGUAGE plpgsql;

CREATE TRIGGER checkUpdateUser
AFTER UPDATE ON UserSite
FOR EACH ROW
EXECUTE PROCEDURE updateUser();