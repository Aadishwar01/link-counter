CREATE TABLE links (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  link VARCHAR(255),
  clicks INT DEFAULT 0
);



INSERT INTO links (title, description, link) VALUES
('Google', 'The world\'s most popular search engine', 'https://www.google.com/'),
('Facebook', 'A social networking site', 'https://www.facebook.com/'),
('Twitter', 'A microblogging and social networking site', 'https://twitter.com/'),
('Instagram', 'A photo and video sharing app', 'https://www.instagram.com/');