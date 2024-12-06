USE Galadevs;

INSERT INTO Admin (AdminID, AdminName, AdminEmail, Role)
VALUES 
(1, 'Rhey Victor Macayran', 'rhey.m@gmail.com', 'Moderator'),
(2, 'Rod Julian Pantajo', 'rod.j@gmail.com', 'Administrator');

INSERT INTO User (UserID, UserName, UserEmail, UserPass)
VALUES 
(1, 'Prencess Wendy Dagohoy', 'prencess.d@gmail.com', 'securepassword1'),
(2, 'Rod Julian Pantajo', 'rod.j@gmail.com', 'securepassword2');

INSERT INTO Review (ReviewID, UserID, ReviewContent, SubmissionDate, Status)
VALUES 
(1, 1, 'This platform is incredibly useful!', '2024-11-15', 'Pending'),
(2, 2, 'I found this app to be very user-friendly.', '2024-11-16', 'Approved');

INSERT INTO Decision (DecisionID, ReviewID, AdminID, Decision, DecisionDate)
VALUES 
(1, 1, 1, TRUE, '2024-11-16'),
(2, 2, 2, TRUE, '2024-11-17');
