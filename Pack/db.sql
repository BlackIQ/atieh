CREATE DATABASE Atieh;
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
    homework_text    TEXT
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
