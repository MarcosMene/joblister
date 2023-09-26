## Project Joblister

This is a project to simulate a job listing application.

I have used PHP 8.2.4 and the MariaDB database.

I wanted to do a project that used classes. So I decided to do this project to practice using OOP (Object-Oriented Programming) with PHP.

## Create database

**I used this command line to create de database:**
CREATE DATABASE joblist;

**For the table categories:**
CREATE TABLE IF NOT EXISTS categories (
id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(255) NOT NULL
);

**For jobs table**
CREATE TABLE IF NOT EXISTS jobs(
id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
category_id int(11),
company VARCHAR(255),
job_title VARCHAR(255),
description VARCHAR(255),
salary VARCHAR(255),
location VARCHAR(255),
contact_user VARCHAR(255),
contact_email VARCHAR(255)
);
