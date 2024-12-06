INSERT INTO Admin (AdminID, AdminName, AdminEmail, Role)
VALUES (1, 'Rhey Victor', 'rhey@gmail.com', 'Moderator');

INSERT INTO User (UserID, UserName, UserEmail, UserPass)
VALUES (1, 'Rhey Victor', 'rhey@gmail.com', 'securepassword');

INSERT INTO Review (ReviewID, UserID, ReviewContent, SubmissionDate, Status)
VALUES (1, 1, 'Great app, I love using it!', '2024-11-12', 'Pending');

INSERT INTO Decision (DecisionID, ReviewID, AdminID, Decision, DecisionDate)
VALUES (1, 1, 1, TRUE, '2024-11-12');