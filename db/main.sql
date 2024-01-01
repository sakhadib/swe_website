CREATE TABLE file (
    file_id INT AUTO_INCREMENT PRIMARY KEY,
    file_name VARCHAR(255),
    file_type VARCHAR(30),
    url VARCHAR(255)
);

CREATE TABLE course (
    course_ID VARCHAR(10) PRIMARY KEY,
    course_Name VARCHAR(255)
    semester INT
);

CREATE TABLE user (
    user_id INT PRIMARY KEY,
    user_name VARCHAR(255),
    password VARCHAR(255),
    batch VARCHAR(255)
);

CREATE TABLE cfu (
    cfu_id INT AUTO_INCREMENT PRIMARY KEY,
    course_id VARCHAR(10),
    user_id INT,
    file_id INT,
    FOREIGN KEY (course_id) REFERENCES course(course_ID),
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (file_id) REFERENCES file(file_id)
);

