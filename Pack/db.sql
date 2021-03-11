-- Create The Database
CREATE DATABASE Atieh;

-- Change Database
USE Atieh;

-- Class Table
CREATE TABLE class
(
    code             TEXT,
    teacher          TEXT,
    teacher_code     TEXT,
    start_time       TEXT,
    end_time         TEXT,
    level            TEXT,
    whatsapp_link    TEXT,
    skype_link       TEXT,
    tuition_price    TEXT,
    homework_session TEXT,
    homework_title   TEXT,
    homework_text    TEXT,
    sex              TEXT,
    days             TEXT
);

-- Student Table
CREATE TABLE student
(
    code           TEXT,
    username       TEXT,
    password       TEXT,
    full_name      TEXT,
    email          TEXT,
    phone          TEXT,
    home_phone     TEXT,
    parent_phone   TEXT,
    level          TEXT,
    payment_status TEXT,
    class          TEXT
);

-- Teacher Table
CREATE TABLE teacher
(
    code      TEXT,
    username  TEXT,
    password  TEXT,
    full_name TEXT,
    email     TEXT,
    phone     TEXT
);

-- Student Status Table
CREATE TABLE status
(
    student_code TEXT,
    S1           TEXT,
    S2           TEXT,
    S3           TEXT,
    S4           TEXT,
    S5           TEXT,
    S6           TEXT,
    S7           TEXT,
    S8           TEXT,
    S9           TEXT,
    S10          TEXT,
    S11          TEXT,
    S12          TEXT,
    S13          TEXT,
    S14          TEXT,
    S15          TEXT,
    S16          TEXT
);

-- Agebt Table
CREATE TABLE agent
(
    agent_code TEXT,
    password   TEXT,
    username   TEXT,
    full_name  TEXT,
    email      TEXT,
    phone      TEXT
);

-- Post Table
CREATE TABLE post
(
    id int AUTO_INCREMENT,
    code  TEXT,
    title TEXT,
    txt   TEXT,
    dt    TEXT,
    who   TEXT,
    PRIMARY KEY (id)
);

-- Institute Table
CREATE TABLE institute
(
    code       TEXT,
    iname      TEXT,
    totald     TEXT,
    leftd      TEXT,
    admin_user TEXT,
    admin_pass TEXT,
    status     TEXT
);