CREATE DATABASE IF NOT EXISTS reviews1;
USE reviews1;

CREATE TABLE IF NOT EXISTS user_reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    comment TEXT NOT NULL,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO user_reviews (username, comment, rating) 
VALUES 
('Galadevs did an outstanding job with the website! The performance is top-notch.', 'Rhey Victor Macayran', 5),
('Amazing work by Galadevs! The design is clean and user-friendly.', 'Prencess Wendy Dagohoy', 5),
('Galadevs delivered a very responsive and modern website. Highly recommended!', 'Rod Julian Pantajo',4),
('Galadevs’s attention to detail is remarkable. Great work on the UI/UX!', 'Rhey Victor Macayran', 5),
('I appreciate the effort Galadevs put into optimizing the website.','Prencess Wendy Dagohoy',  4),
('The functionality is seamless. Galadevs is a true professional.', 'Rod Julian Pantajo', 5);