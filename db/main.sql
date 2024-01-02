CREATE TABLE file (
    file_id INT AUTO_INCREMENT PRIMARY KEY,
    file_name VARCHAR(255),
    file_type VARCHAR(30),
    url VARCHAR(255),
    FOREIGN KEY (file_type) REFERENCES file_type(ftype)
);

CREATE TABLE file_type (
    ftype VARCHAR(30) PRIMARY KEY
);

CREATE TABLE course (
    course_ID VARCHAR(10) PRIMARY KEY,
    course_Name VARCHAR(255)
    semester INT
);

CREATE TABLE shuser (
    sid INT PRIMARY KEY,
    fullName VARCHAR(255),
    email VARCHAR(255),
    pass VARCHAR(255),
    batch VARCHAR(255)
);

CREATE TABLE cfu (
    cfu_id INT AUTO_INCREMENT PRIMARY KEY,
    course_id VARCHAR(10),
    sid INT,
    file_id INT,
    FOREIGN KEY (course_id) REFERENCES course(course_ID),
    FOREIGN KEY (user_id) REFERENCES shuser(sid),
    FOREIGN KEY (file_id) REFERENCES file(file_id)
);

drop table aa;





INSERT INTO course (course_ID, course_Name, semester) VALUES ('Hum 4145', 'Islamiat', 1);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Hum 4147', 'Technology, Environment and Society', 1);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Math 4141', 'Geometry and Differential Calculus', 1);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Phy 4143', 'Physics II', 1);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4107', 'Structured Programming I', 1);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4101', 'Introduction to Software Engineering', 1);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Phy 4144', 'Physics II Lab', 1);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4108', 'Structured Programming I Lab', 1);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4104', 'Engineering Drawing Lab', 1);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Hum 4247', 'Accounting', 2);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Hum 4249', 'Business Psychology and Communications', 2);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Math 4241', 'Integral Calculus and Differential Equations', 2);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4203', 'Discrete Mathematics', 2);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4205', 'Digital Logic Design', 2);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4201', 'Object Oriented Concepts I', 2);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Hum 4242', 'Arabic II', 2);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4206', 'Digital Logic Design Lab', 2);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4202', 'Object Oriented Concepts I Lab', 2);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Math 4341', 'Linear Algebra', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4303', 'Data Structures', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4305', 'Computer Organization and Architecture', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4307', 'Database Management Systems', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4309', 'Theory of Computing', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4301', 'Object Oriented Concepts II', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4304', 'Data Structures Lab', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4308', 'Database Management Systems Lab', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4302', 'Object Oriented Concepts II Lab', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4304', 'Software Project Lab I', 3);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Hum 4441', 'Engineering Ethics', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Math 4441', 'Probability and Statistics', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4403', 'Algorithms', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4409', 'Database Management Systems II', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4411', 'Data Communication and Networking', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4401', 'Software Requirement and Specifications', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4404', 'Algorithms Lab', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4410', 'Database Management Systems II Lab', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4412', 'Data Communication and Networking Lab', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4402', 'Software Requirement and Specifications Lab', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4404', 'Software Project Lab II', 4);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Math 4543', 'Numerical Methods', 5);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4501', 'Operating Systems', 5);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4501', 'Design Patterns', 5);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4503', 'Software Security', 5);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('Math 4544', 'Numerical Methods Lab', 5);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('CSE 4502', 'Operating Systems Lab', 5);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4502', 'Design Patterns Lab', 5);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4504', 'Software Security Lab', 5);
INSERT INTO course (course_ID, course_Name, semester) VALUES ('SWE 4506', 'Design Project I', 5);


