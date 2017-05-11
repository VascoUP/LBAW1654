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
DROP TABLE IF EXISTS UserTokens CASCADE;
DROP TABLE IF EXISTS IterationsPermissions CASCADE;

DROP TYPE IF EXISTS TaskStatus;
DROP TYPE IF EXISTS UserStatusProject;
DROP TYPE IF EXISTS ProjectStatus;
DROP TYPE IF EXISTS StatusProj;
DROP TYPE IF EXISTS UserStatus;
DROP TYPE IF EXISTS ReportStatus;
DROP TYPE IF EXISTS NotificationStatus;

CREATE TYPE TaskStatus AS ENUM('active', 'completed', 'unassigned');
CREATE TYPE UserStatusProject AS ENUM('inactive', 'active', 'invited');
CREATE TYPE ProjectStatus AS ENUM('finished', 'working');
CREATE TYPE StatusProj AS ENUM('active', 'banned');
CREATE TYPE UserStatus AS ENUM('active', 'inactive', 'banned');
CREATE TYPE ReportStatus AS ENUM('waiting', 'handled');
CREATE TYPE NotificationStatus AS ENUM('waiting', 'read');

CREATE TABLE Project
(
	projectID serial PRIMARY KEY,
	name varchar(50) NOT NULL,
	description varchar(100) NOT NULL,
	access bit DEFAULT 1::bit NOT NULL,
	projectStatus StatusProj NOT NULL DEFAULT('active')
);

CREATE TABLE Iteration
(
	iterationID serial PRIMARY KEY,
	projectID integer NOT NULL,
	name varchar(50),
	description varchar(100) NOT NULL,
	startDate date NOT NULL,
	dueDate date,
	maximumEffort int NOT NULL DEFAULT(1), 
	FOREIGN KEY(projectID) REFERENCES Project(projectID)
				ON DELETE CASCADE
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
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	CHECK(effort >= 0 AND effort <= 100 AND priority >= 1 AND priority <= 10)
);

CREATE TABLE UserSite
(
	userID serial PRIMARY KEY,
	username varchar(50) NOT NULL UNIQUE,
	email varchar(50) NOT NULL UNIQUE,
	password varchar(500) NOT NULL,
	photo varchar(100),
	description varchar(100),
	curriculumVitae varchar(100),
	type varchar(50) NOT NULL,
	userStatus UserStatus NOT NULL DEFAULT('active')
);

CREATE TABLE Thread
(
	threadID serial PRIMARY KEY,
	projectID integer NOT NULL,
	userID integer NOT NULL,
	title varchar(100) NOT NULL,
	date date NOT NULL,
	FOREIGN KEY(projectID) REFERENCES Project(projectID)
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE
);

CREATE TABLE Report
(
	reportID serial PRIMARY KEY,
	content varchar(200) NOT NULL,
	threadID integer,
	taskID integer,
	userID integer,
	reportDate date NOT NULL,
	handledDate date,
	reportStatus ReportStatus NOT NULL DEFAULT('waiting'),
	FOREIGN KEY(threadID) REFERENCES Thread(threadID)
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY(taskID) REFERENCES Task(taskID)
				ON DELETE CASCADE
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
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY(threadID) REFERENCES Thread(threadID)
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE,
	FOREIGN KEY(reportID) REFERENCES Report(reportID)
				ON DELETE CASCADE
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
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY(taskID) REFERENCES Task(taskID)
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY(commentID) REFERENCES Comment(commentID)
				ON DELETE CASCADE
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
				ON DELETE CASCADE
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
				ON DELETE CASCADE
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
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY(projectID) REFERENCES Project(projectID)
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	PRIMARY KEY(tagID, projectID)
);

CREATE TABLE TaskUser
(
	taskID serial,
	userID serial,
	FOREIGN KEY(taskID) REFERENCES Task(taskID)
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE,
	PRIMARY KEY(taskID, userID)
);

CREATE TABLE UserTokens
(
	tokenID serial PRIMARY KEY,
	userID serial,
	tokenName varchar(500),
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE
);

CREATE TABLE IterationsPermissions
(
	iterationID serial,
	userID serial,
	FOREIGN KEY(iterationID) REFERENCES Iteration(iterationID)
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY(userID) REFERENCES UserSite(userID)
				ON UPDATE CASCADE,
	PRIMARY KEY(iterationID, userID)
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

-- Inserts --

INSERT INTO Project(name, description, access, projectStatus) VALUES ('MathProject', 'Awesome calculator developed in C++', B'1', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Aelius', 'Restaurant guide developed in HTML', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Zombie Attack', 'Zombie game developed in C', B'1', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Organizer', 'A project on developing a task scheduler in JavaScript', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('The Pianist', 'An indie movie developed by a small team', B'1', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Surfer Shack', 'Construction of a surfing school in Cascais', B'1', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Music School', 'Independent Music school project', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('MathProject', 'Awesome calculator developed in C++', B'1', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Website Development', 'Project about developing a website', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Study of inter eletronic vibrations', 'Phisics related study', B'1', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Research in Africa', 'Waka waka, because this is Africa!', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Gardening Project', 'Need help to form small gardening team', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Work overload support group', 'Because sometimes four deliveries in the same week is too much', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Rural road construction', 'Independent construction service', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('MazeRunner', 'Maze game developed in Assembly', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Cell research', 'A project in research of cell DNA', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Project on Projects', 'Project on a project about developing projects', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Movie making course', 'Course on film shooting', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('Running group', 'Project on creating a city running group', B'0', 'active');
INSERT INTO Project(name, description, access, projectStatus) VALUES ('HTML is your friend!', 'Project on setting a HTML learning platform!', B'0', 'active');

INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (1, 'Week #1', '2017-01-08', 40);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (2, 'Iteration 1', '2017-02-01', 90);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (2, 'Iteration 2', '2017-03-10', 10);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (3, 'Tasks week 1', '2017-03-17', 30);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (4, 'First Week', '2017-05-1', 30);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (5, 'First Take', '2017-03-17', 30);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (6, 'Week One', '2017-05-1', 50);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (7, 'Week 1', '2017-02-02', 10);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (8, 'Start', '2017-02-02', 10);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (9, 'Presentations', '2017-02-02', 10);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (10, 'Begin', '2017-02-02', 10);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (11, 'Beggining', '2017-02-02', 60);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (12, 'Iteration 1', '2017-02-02', 60);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (13, 'Interaction 1', '2017-02-02', 20);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (14, 'Week 1', '2017-02-02', 10);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (15, 'Setup', '2017-02-02', 10);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (16, 'Cell 1', '2017-02-02', 30);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (17, 'Project 1', '2017-02-02', 40);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (18, 'Starting Week', '2017-02-02', 50);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (19, 'First race', '2017-02-02', 90);
INSERT INTO Iteration(projectID, description, startDate, maximumEffort) VALUES (20, 'Tag 1', '2017-02-02', 90);

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (1, 1, 'We need to implement the sum operation', 'Sum opperation', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (1, 1, 'We need to implement the minus operation', 'Minus opperation', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (1, 2, 'We need to implement the divison operation', 'Divison opperation', 8, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (1, 2, 'We need to implement the multiplication operation', 'Multiplication opperation', 8, 'completed');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 1, 'Implement the the edit profile', 'Edit profile', 5, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 1, 'Implement the restaurant main page', 'Restaurant page', 20, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 1, 'Implement the search page', 'Search page', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 2, 'Implement the edit restaurant page', 'Edit restaurant edit page', 5, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 2, 'Implement the restaurant menu page', 'Menu page', 15, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 3, 'Implement a search organizer', 'Search organizer', 5, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 4, 'Implement a top 5 restaurants', 'Top5', 5, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 5, 'CSS review', 'CSS', 10, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 10, 'Site main page', 'Main page', 20, 'completed');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 10, 'Create login', 'Login', 10, 'completed');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (2, 10, 'Create register', 'Register', 10, 'completed');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (3, 1, 'JavaScript to login', 'JavScript login', 10, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (3, 1, 'JavaScript to register', 'Sum opperation', 10, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (4, 10, 'Start the main class', 'Main class', 10, 'completed');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (4, 10, 'Start the game class', 'Game class', 10, 'completed');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (4, 10, 'Draw the characters', 'Characters', 10, 'completed');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (4, 10, 'Draw the background', 'Background', 10, 'completed');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (4, 10, 'State machine', 'State machine', 10, 'completed');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (5, 10, 'Draw the background', 'Background', 10, 'completed');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (5, 10, 'State machine', 'State machine', 10, 'completed');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (6, 10, 'Purchase 5 cameras and props', 'Purchase Equipment', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (6, 10, 'Buy 3 microphones', 'Obtain Microphones', 5, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (6, 1, 'Fix the directors chair', 'Fixing Instruments', 5, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (6, 3, 'Review actor roles', 'Review Roles', 20, 'completed');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (6, 5, 'Begin movie production', 'Start Recording', 20, 'completed');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (7, 5, 'Buy materials for construction','Buy Materials', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (7, 5, 'Start Foundation work', 'Lay the foundation for the building', 5, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (7, 5, 'Assert last minute details about the construction', 'Finish contruction plan', 5, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (7, 10, 'Use social networks to find new participants for the project', 'Find Volunteers', 10, 'completed');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (8, 4, 'Purchase some violins and flutes', 'Purchase Equipment', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (8, 10, 'Initiate Recorder Lessons', 'Recorcer lessons', 5, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (8, 3, 'Distribute the music sheets', 'Assing Sheets', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (9, 4, 'Start JSON', 'Implement some JSON', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (9, 10, 'Clean DB', 'Clean Database', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (10, 4, 'Clean eletronic microscopes', 'Clean eletronic Microscopes', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (10, 10, 'Check study', 'Check scientific studies about the issue', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (11, 4, 'Geo Measurements', 'Perform geographic mesurements of plates', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (11, 10, 'Find some volunteers', 'Requestion Volunteers', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (12, 4, 'Buy tools for gardening', 'Buy Equipment', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (12, 10, 'Keep the lawn clear', 'Clean the Lawn', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (13, 4, ' Start Support Group', 'Start Group', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (13, 10, 'Record Lessons', 'Record the lessons', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (14, 4, 'Buy tools', 'Purchase Equipment', 10, 'active');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (14, 10, 'Begin construction', 'Construction start', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (15, 4, 'Implement AI', 'AI Implementation', 10, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (15, 10, 'Implement Tests', 'Implement Tests', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (16, 4, 'Clean microscopes', 'Clean Equipment', 10, 'unassigned');
INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (16, 10, 'Start analysis', 'Begin analysis', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (17, 10, 'Start Project', 'Project start', 5, 'active');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (18, 4, 'Begin lessons', 'Begin lessons', 10, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (19, 10, 'Start with light jogging', 'Jogging practise', 5, 'active');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (20, 10, 'Run up and down', 'Running', 5, 'unassigned');

INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES (21, 10, 'Beging HTML implementation', 'Start HTML', 5, 'unassigned');


INSERT INTO UserSite(username, email, password, description, type, userStatus) VALUES ('METRAP', 'metrap@gmail.com', 'metaBoss', 'I like to play games', 'coordinator', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('nikki', 'nikki45@gmail.com', 'nikki89765', 'coordinator', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('adminYM', 'adminYM@gmail.com', 'adminYM', 'administrator', 'active');
INSERT INTO UserSite(username, email, password, description, type, userStatus) VALUES ('sfcf', 'sfcf@hotmail.com', 'sfcf199612', 'A beautiful butterfly', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser', 'ymUser@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('vanFree', 'vanFree@gmail.com', 'vanFreevfvf', 'user', 'inactive');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('hisa', 'hisa@hotmail.com', 'hisa1234', 'coordinator', 'active');
INSERT INTO UserSite(username, email, password, description, type, userStatus) VALUES ('ruteMarlene', 'rute_marlene@gmail.com', 'rutinha', 'I like to draw and paint', 'user', 'active');
INSERT INTO UserSite(username, email, password, description, type, userStatus) VALUES ('mariaLeal', 'maryLinda@gmail.com', 'maryTheLinda', 'I like to sing and help others', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser1', 'ymUser1@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser2', 'ymUser2@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser3', 'ymUser3@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser4', 'ymUser4@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser5', 'ymUser5@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser6', 'ymUser6@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser7', 'ymUser7@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser8', 'ymUser8@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser9', 'ymUser9@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser10', 'ymUser10@gmail.com', '12345ym67890', 'user', 'active');
INSERT INTO UserSite(username, email, password, type, userStatus) VALUES ('ymUser20', 'ymUser20@gmail.com', '12345ym67890', 'user', 'active');


INSERT INTO Thread(projectID, userID, title, date) VALUES (1, 1, 'I cant print the operation result', '2017-03-22');
INSERT INTO Thread(projectID, userID, title, date) VALUES (1, 2, 'I cant import the project', '2017-03-25');
INSERT INTO Thread(projectID, userID, title, date) VALUES (2, 3, 'Background image doesnt load', '2017-02-11');
INSERT INTO Thread(projectID, userID, title, date) VALUES (3, 4, 'Zombies are crazy', '2017-03-25');
INSERT INTO Thread(projectID, userID, title, date) VALUES (7, 5, 'Where to buy flutes!?', '2017-02-23');
INSERT INTO Thread(projectID, userID, title, date) VALUES (3, 6, 'Running in virtualBox scenario', '2017-03-12');
INSERT INTO Thread(projectID, userID, title, date) VALUES (5, 7, 'Camera no2 will not work', '2017-03-26');
INSERT INTO Thread(projectID, userID, title, date) VALUES (6, 8, 'I have no surf board, please help', '2017-05-05');
INSERT INTO Thread(projectID, userID, title, date) VALUES (4, 9, 'How to use a state machine in C', '2017-03-26');
INSERT INTO Thread(projectID, userID, title, date) VALUES (7, 10, 'Should we repaint the piano keys?', '2017-02-05');
INSERT INTO Thread(projectID, userID, title, date) VALUES (8, 11, 'Help reinstalling OS', '2017-03-22');
INSERT INTO Thread(projectID, userID, title, date) VALUES (8, 12, 'Linux has npm issues', '2017-03-25');
INSERT INTO Thread(projectID, userID, title, date) VALUES (3, 1, 'Self presentation thread', '2017-02-11');
INSERT INTO Thread(projectID, userID, title, date) VALUES (9, 3, 'Welcome to the project', '2017-03-25');
INSERT INTO Thread(projectID, userID, title, date) VALUES (11, 13, 'When should we use JSON?', '2017-02-23');
INSERT INTO Thread(projectID, userID, title, date) VALUES (15, 16, 'Mobility issues, seeking help', '2017-03-12');
INSERT INTO Thread(projectID, userID, title, date) VALUES (14, 4, 'Investigation projects related with medical issues', '2017-03-26');
INSERT INTO Thread(projectID, userID, title, date) VALUES (1, 5, 'I dont know how to code!!', '2017-05-05');
INSERT INTO Thread(projectID, userID, title, date) VALUES (1, 6, 'The dates presented are previous to the creation of the project', '2017-03-26');
INSERT INTO Thread(projectID, userID, title, date) VALUES (2, 7, 'Work overload, seeking treatment!', '2017-02-05');

INSERT INTO Report(content, threadID, reportDate, reportStatus) VALUES ('a', 1,'2017-03-29', 'waiting');
INSERT INTO Report(content, userID, reportDate, reportStatus) VALUES ('b', 6,'2017-02-01', 'waiting');
INSERT INTO Report(content, taskID, reportDate, reportStatus) VALUES ('c', 20,'2017-02-04', 'waiting');

INSERT INTO Comment(taskID, userID, date, content) VALUES (3,2,'2017-02-02', 'Which libraries can we use?');
INSERT INTO Comment(threadID, userID, date, content) VALUES (4,1,'2017-04-26', 'All of them!');
INSERT INTO Comment(taskID, userID, date, content) VALUES (16,5, '2017-02-02', 'This sounds boring!');
INSERT INTO Comment(threadID, userID, date, content) VALUES (4,3,'2017-03-01', 'Have you tried running: sudo shutdown now ?');
INSERT INTO Comment(threadID, userID, date, content) VALUES (5,5,'2017-02-23', 'Have you tried the closest music store?');
INSERT INTO Comment(threadID, userID, date, content) VALUES (5,3,'2017-02-24', 'Yes but they do not have any!');
INSERT INTO Comment(threadID, userID, date, content) VALUES (6,9,'2017-03-12', 'Yes it is possible!');
INSERT INTO Comment(threadID, userID, date, content) VALUES (8,2,'2017-05-06', 'Sorry I cannot help you!');
INSERT INTO Comment(threadID, userID, date, content) VALUES (8,1,'2017-05-07', 'I think I can help you with that');
INSERT INTO Comment(threadID, userID, date, content) VALUES (7,2,'2017-03-26', 'You need to take it to John!!');
INSERT INTO Comment(threadID, userID, date, content) VALUES (10,8,'2017-02-05', 'I think we should!');
INSERT INTO Comment(threadID, userID, date, content) VALUES (10,1,'2017-02-05', 'Would that damage the piano?');
INSERT INTO Comment(taskID, userID, date, content) VALUES (13,2,'2017-02-02', 'Can someone help me with this task?');
INSERT INTO Comment(threadID, userID, date, content) VALUES (12,1,'2017-04-26', 'All of them!');
INSERT INTO Comment(taskID, userID, date, content) VALUES (16,5, '2017-02-02', 'This sounds boring!');
INSERT INTO Comment(threadID, userID, date, content) VALUES (5,13,'2017-02-24', 'That is very strange');
INSERT INTO Comment(threadID, userID, date, content) VALUES (5,15,'2017-02-24', 'Have you tried online?');
INSERT INTO Comment(threadID, userID, date, content) VALUES (5,13,'2017-02-24', 'Should I go for amazon?');
INSERT INTO Comment(threadID, userID, date, content) VALUES (16,19,'2017-03-12', 'hey there!');
INSERT INTO Comment(threadID, userID, date, content) VALUES (18,12,'2017-05-06', 'Sorry I cannot help you!');

INSERT INTO Notification(reportID, notificationDate, content, notificationStatus) VALUES (1,'2017-03-29', 'You have been reported', 'waiting');
INSERT INTO Notification(taskID, notificationDate, content, notificationStatus) VALUES (1,'2017-02-05', 'You have been assigned to a task', 'waiting');
INSERT INTO Notification(commentID, notificationDate, content, notificationStatus) VALUES (1,'2017-01-01', 'Someone commented on your thread', 'waiting');
INSERT INTO Notification(reportID, notificationDate, content, notificationStatus) VALUES (1,'2017-02-22', 'You have been reported', 'waiting');

INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (6,1,'2017-01-01','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (3,2,'2017-02-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (1,3,'2017-03-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (2,4,'2017-03-12','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (4,5,'2017-02-10','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (5,7,'2017-01-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (8,8,'2017-01-02','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (9,9,'2017-01-01','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (10,10,'2017-02-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (11,11,'2017-03-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (12,12,'2017-03-12','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (14,13,'2017-02-10','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (15,14,'2017-01-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (18,12,'2017-01-02','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (20,20,'2017-01-01','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (20,19,'2017-02-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (13,4,'2017-03-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (17,17,'2017-03-12','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (19,6,'2017-02-10','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (16,5,'2017-01-22','2017-12-25','working');
INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, ProjectStatus) VALUES (7,2,'2017-01-02','2017-12-25','working');

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
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,8,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,8,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,9,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,9,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,10,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,10,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,11,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,11,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,12,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,12,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,13,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,13,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,14,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,14,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,15,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,15,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,16,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,16,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,17,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,17,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,18,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,18,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,19,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,19,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (11,20,'2017-01-02','active');
INSERT INTO ProjectUsers(userID, projectID, invitedate, userStatusProject) VALUES (12,20,'2017-01-02','active');


INSERT INTO Tag(name) VALUES ('Music');
INSERT INTO Tag(name) VALUES ('Programming');
INSERT INTO Tag(name) VALUES ('Building');
INSERT INTO Tag(name) VALUES ('Independent');
INSERT INTO Tag(name) VALUES ('Volunteering');
INSERT INTO Tag(name) VALUES ('Education');
INSERT INTO Tag(name) VALUES ('Social');
INSERT INTO Tag(name) VALUES ('Construction');
INSERT INTO Tag(name) VALUES ('Animals');
INSERT INTO Tag(name) VALUES ('C++');
INSERT INTO Tag(name) VALUES ('Learning');
INSERT INTO Tag(name) VALUES ('Psicology');
INSERT INTO Tag(name) VALUES ('Phisics');
INSERT INTO Tag(name) VALUES ('Mathematics');
INSERT INTO Tag(name) VALUES ('Logic');
INSERT INTO Tag(name) VALUES ('Software Engineering');
INSERT INTO Tag(name) VALUES ('Web Dev');
INSERT INTO Tag(name) VALUES ('City Exploration');
INSERT INTO Tag(name) VALUES ('Time Organization');
INSERT INTO Tag(name) VALUES ('Food');

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
INSERT INTO TagProject(tagID, projectID) VALUES (8,8);
INSERT INTO TagProject(tagID, projectID) VALUES (11,9);
INSERT INTO TagProject(tagID, projectID) VALUES (12,10);
INSERT INTO TagProject(tagID, projectID) VALUES (9,11);
INSERT INTO TagProject(tagID, projectID) VALUES (10,20);
INSERT INTO TagProject(tagID, projectID) VALUES (13,12);
INSERT INTO TagProject(tagID, projectID) VALUES (14,13);
INSERT INTO TagProject(tagID, projectID) VALUES (15,14);
INSERT INTO TagProject(tagID, projectID) VALUES (16,15);
INSERT INTO TagProject(tagID, projectID) VALUES (17,16);
INSERT INTO TagProject(tagID, projectID) VALUES (18,17);
INSERT INTO TagProject(tagID, projectID) VALUES (19,18);
INSERT INTO TagProject(tagID, projectID) VALUES (20,19);
INSERT INTO TagProject(tagID, projectID) VALUES (18,19);
INSERT INTO TagProject(tagID, projectID) VALUES (17,15);

INSERT INTO TaskUser(taskID, userID) VALUES (1,1);
INSERT INTO TaskUser(taskID, userID) VALUES (2,4);
INSERT INTO TaskUser(taskID, userID) VALUES (5,1);
INSERT INTO TaskUser(taskID, userID) VALUES (6,3);
INSERT INTO TaskUser(taskID, userID) VALUES (25,2);
INSERT INTO TaskUser(taskID, userID) VALUES (7,2);
INSERT INTO TaskUser(taskID, userID) VALUES (25,1);
INSERT INTO TaskUser(taskID, userID) VALUES (30,1);
INSERT INTO TaskUser(taskID, userID) VALUES (34,2);

INSERT INTO TaskUser(taskID, userID) VALUES (37,11);
INSERT INTO TaskUser(taskID, userID) VALUES (39,12);
INSERT INTO TaskUser(taskID, userID) VALUES (41,11);
INSERT INTO TaskUser(taskID, userID) VALUES (43,11);
INSERT INTO TaskUser(taskID, userID) VALUES (43,12);
INSERT INTO TaskUser(taskID, userID) VALUES (45,12);
INSERT INTO TaskUser(taskID, userID) VALUES (47,11);
INSERT INTO TaskUser(taskID, userID) VALUES (49,11);
INSERT INTO TaskUser(taskID, userID) VALUES (51,12);
INSERT INTO TaskUser(taskID, userID) VALUES (54,11);
INSERT INTO TaskUser(taskID, userID) VALUES (56,12);

CREATE OR REPLACE FUNCTION checkAdmins()
	RETURNS TRIGGER AS $checkAdmins$ 
	BEGIN
        IF (SELECT COUNT(*) FROM UserSite WHERE NEW.type = 'administrator') = 1
        THEN RAISE EXCEPTION 'Website needs administrators! ';
        END IF;
        RETURN OLD;
	END;
$checkAdmins$ LANGUAGE plpgsql;

CREATE TRIGGER checkRemoveAdmins
BEFORE DELETE ON UserSite
EXECUTE PROCEDURE checkAdmins();

CREATE OR REPLACE FUNCTION checkCoords()
	RETURNS TRIGGER AS $checkCoords$ 
	BEGIN
        IF (SELECT COUNT(*) FROM ProjectCoordinator WHERE projectID = NEW.projectID) = 1
        THEN RAISE EXCEPTION 'Project needs coordinators! ';
        END IF;
        RETURN OLD;
	END;
$checkCoords$ LANGUAGE plpgsql;

CREATE TRIGGER checkCoords
BEFORE DELETE ON ProjectCoordinator
EXECUTE PROCEDURE checkCoords();

CREATE OR REPLACE FUNCTION checkIterarions()
	RETURNS TRIGGER AS $checkIterarions$
	BEGIN
        IF (SELECT COUNT(*) FROM Task INNER JOIN Iteration ON Task.iterationID = Iteration.iterationID WHERE Task.taskStatus = 'active') > 0 
        THEN RAISE EXCEPTION ' Not all tasks are completed yet! ';
        END IF;
        RETURN OLD;
	END;
$checkIterarions$ LANGUAGE plpgsql;

CREATE TRIGGER checkDeleteIteration
BEFORE DELETE ON Iteration
FOR EACH ROW
EXECUTE PROCEDURE checkIterarions();

CREATE OR REPLACE FUNCTION checkEffort()
	RETURNS TRIGGER AS $checkEffort$
BEGIN
	IF ((SELECT SUM (Task.effort) FROM Task INNER JOIN Iteration ON Task.iterationID = Iteration.iterationID) > (SELECT maximumEffort FROM Iteration WHERE Iteration.iterationID = NEW.iterationID))
        THEN RAISE EXCEPTION ' Effort cannot surpass maximum effort for an iterarion! ';
        END IF;
	RETURN NEW;
END;
$checkEffort$ LANGUAGE plpgsql;

CREATE TRIGGER checkEfforAdd
BEFORE INSERT ON Task
FOR EACH ROW
EXECUTE PROCEDURE checkEffort();

DROP FUNCTION IF EXISTS CheckTag();
CREATE FUNCTION
	CheckTag()
RETURNS TRIGGER AS $checkTag$
	BEGIN
        IF EXISTS (SELECT * FROM Tag 
        WHERE Tag.name = NEW.name) THEN
		RETURN OLD;
        END IF;
		RETURN NEW;
	END;
$checkTag$ LANGUAGE plpgsql;
 
 
CREATE TRIGGER CheckTagAddition
BEFORE INSERT ON Tag 
FOR EACH ROW 
EXECUTE PROCEDURE CheckTag();

DROP FUNCTION IF EXISTS changeUser();
CREATE FUNCTION changeUser()
RETURNS TRIGGER AS $changeUser$
	BEGIN
		UPDATE UserSite
		SET type = 'coordinator'
		WHERE userID = NEW.userID;
		RETURN NEW;
	END;
$changeUser$ LANGUAGE plpgsql;

CREATE TRIGGER CheckChangeUser
AFTER INSERT ON ProjectCoordinator
FOR EACH ROW 
EXECUTE PROCEDURE changeUser();

DROP FUNCTION IF EXISTS changeTaskStatus();
CREATE FUNCTION changeTaskStatus()
RETURNS TRIGGER AS $changeTaskStatus$
	BEGIN
		UPDATE Task
		SET taskStatus = 'active'
		WHERE taskID = NEW.taskID;
		RETURN NEW;
	END;
$changeTaskStatus$ LANGUAGE plpgsql;

CREATE TRIGGER changeTaskStatus
AFTER INSERT ON TaskUser
FOR EACH ROW 
EXECUTE PROCEDURE changeTaskStatus();
		

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
