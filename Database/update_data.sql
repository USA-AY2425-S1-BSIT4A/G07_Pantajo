USE Galadevs;

UPDATE Admin
SET Role = 'Super Admin'
WHERE AdminID = 1;

UPDATE User
SET UserPass = 'newsecurepassword'
WHERE UserID = 1;

UPDATE Review
SET Status = 'Approved'
WHERE ReviewID = 1;

UPDATE Decision
SET Decision = FALSE, DecisionDate = '2024-11-13'
WHERE DecisionID = 1;
