USE Galadevs;

SELECT AdminID, AdminName, AdminEmail, Role FROM Admin;

SELECT UserID, UserName, UserEmail FROM User;

SELECT Review.ReviewID, User.UserName, Review.ReviewContent, Review.SubmissionDate, Review.Status
FROM Review
JOIN User ON Review.UserID = User.UserID;

SELECT Decision.DecisionID, Review.ReviewContent, Admin.AdminName, Decision.Decision, Decision.DecisionDate
FROM Decision
JOIN Review ON Decision.ReviewID = Review.ReviewID
JOIN Admin ON Decision.AdminID = Admin.AdminID;

SELECT ReviewID, ReviewContent, SubmissionDate
FROM Review
WHERE Status = 'Pending';
