-- Create database
CREATE DATABASE IF NOT EXISTS portfolio;

USE portfolio;

-- Create experiences table
CREATE TABLE experiences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    year VARCHAR(10) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create skills table
CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    level INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create certificates table
CREATE TABLE certificates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    issuer VARCHAR(255) NOT NULL,
    year VARCHAR(10) NOT NULL,
    image_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create contact_messages table
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert dummy data for experiences
INSERT INTO experiences (title, company, year, description) VALUES
('Web Developer', 'PT. ABC Tech', '2020-2023', 'Developed responsive web applications using Laravel and Vue.js.'),
('UI/UX Designer', 'Freelance', '2019-2020', 'Designed user interfaces for mobile and web applications.'),
('Frontend Developer', 'XYZ Corp', '2018-2019', 'Built interactive frontends with React and Tailwind CSS.');

-- Insert dummy data for skills
INSERT INTO skills (name, level) VALUES
('Laravel', 90),
('Tailwind CSS', 85),
('JavaScript', 80),
('Vue.js', 75),
('React', 70);

-- Insert dummy data for certificates
INSERT INTO certificates (title, issuer, year, image_path) VALUES
('Certified Laravel Developer', 'Laravel Institute', '2022', 'certificates/laravel-cert.png'),
('Tailwind CSS Expert', 'Tailwind Labs', '2021', 'certificates/tailwind-cert.png'),
('JavaScript Fundamentals', 'Codecademy', '2020', 'certificates/js-cert.png');

-- Insert dummy data for contact_messages (optional, can be empty)
-- INSERT INTO contact_messages (name, email, message) VALUES
-- ('John Doe', 'john@example.com', 'Hello, I am interested in your services.');
