CREATE DATABASE IF NOT EXISTS mvc_subject_tracker;
USE mvc_subject_tracker;

CREATE TABLE IF NOT EXISTS subjects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject_code VARCHAR(50) NOT NULL,
    description VARCHAR(255) NOT NULL,
    student VARCHAR(100) NOT NULL,
    grade DECIMAL(3, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO subjects (subject_code, description, student, grade) VALUES
('WEBPROG', 'Web Programming', 'jdgonzales3@student.apc.edu.ph', 3.5),
('PEMBEDS', 'Embedded Systems', 'jdgonzales2@student.apc.edu.ph', 4.0),
('INFOSEC', 'Information Security', 'jdgonzales@student.apc.edu.ph', 3.0),
('ANLYTC1', 'Analytics', 'jmdgonzales@student.apc.edu.ph', 4.0),
('DATAMA2', 'Database Management', 'malenia@bladeofmiquella.apc.edu.ph', 4.0);
