.bail ON
.mode columns
.headers on
.nullvalue NULL

PRAGMA FOREIGN_KEYS=ON;

DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Administrator;
DROP TABLE IF EXISTS AuthenticatedUser;
DROP TABLE IF EXISTS Coordinator;
DROP TABLE IF EXISTS Project;
DROP TABLE IF EXISTS Tag;
DROP TABLE IF EXISTS Forum;
DROP TABLE IF EXISTS Thread;
DROP TABLE IF EXISTS Comment;
DROP TABLE IF EXISTS Iteration;
DROP TABLE IF EXISTS Task;


/*
		USERS
*/
CREATE TABLE User {

}

CREATE TABLE Administrator {

}

CREATE TABLE AuthenticatedUser {

}

CREATE TABLE Coordinator {

}


/*
		PROJECTS
*/
CREATE TABLE Project {

}

CREATE TABLE Tag {

}

CREATE TABLE Forum {

}

CREATE TABLE Thread {

}

CREATE TABLE Comment {

}

CREATE TABLE Iteration {

}

CREATE TABLE Task {

}