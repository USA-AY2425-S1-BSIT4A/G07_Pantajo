CREATE DATABASE Galadevs;

USE Galadevs;

CREATE TABLE Admin (
    AdminID INT(10) NOT NULL,
    AdminName VARCHAR(255) NOT NULL,
    AdminEmail VARCHAR(255) NOT NULL,
    Role VARCHAR(255) NOT NULL,
    PRIMARY KEY (AdminID)
);

CREATE TABLE User (
    UserID INT(10) NOT NULL,
    UserName VARCHAR(255) NOT NULL,
    UserEmail VARCHAR(255) NOT NULL,
    UserPass VARCHAR(255) NOT NULL,
    PRIMARY KEY (UserID)
);

CREATE TABLE Review (
    ReviewID INT(10) NOT NULL,
    UserID INT(10) NOT NULL,
    ReviewContent VARCHAR(255) NOT NULL,
    SubmissionDate DATE,
    Status VARCHAR(255) NOT NULL,
    PRIMARY KEY (ReviewID),
    FOREIGN KEY (UserID) REFERENCES User(UserID)
);

CREATE TABLE Decision (
    DecisionID INT(10) NOT NULL,
    ReviewID INT(10) NOT NULL,
    AdminID INT(10) NOT NULL,
    Decision BOOLEAN NOT NULL,
    DecisionDate DATE,
    PRIMARY KEY (DecisionID),
    FOREIGN KEY (ReviewID) REFERENCES Review(ReviewID),
    FOREIGN KEY (AdminID) REFERENCES Admin(AdminID)
);
