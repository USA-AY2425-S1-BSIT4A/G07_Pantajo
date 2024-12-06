USE Galadevs;

SELECT * FROM Admin;

SELECT AdminID, AdminName, AdminEmail, Role 
FROM Admin
WHERE AdminID = 1;

SELECT * FROM User;

SELECT UserID, UserName, UserEmail 
FROM User
WHERE UserID = 1;

SELECT Review.ReviewID, User.UserName, Review.ReviewContent, Review.SubmissionDate, Review.Status
FROM Review
JOIN User ON Review.UserID = User.UserID;

SELECT ReviewID, ReviewContent, SubmissionDate
FROM Review
WHERE Status = 'Pending';

SELECT Decision.DecisionID, Review.ReviewContent, Admin.AdminName, Decision.Decision, Decision.DecisionDate
FROM Decision
JOIN Review ON Decision.ReviewID = Review.ReviewID
JOIN Admin ON Decision.AdminID = Admin.AdminID;

SELECT DecisionID, ReviewID, AdminID, Decision, DecisionDate
FROM Decision
WHERE DecisionID = 1;
