-- create database
DROP DATABASE IF EXISTS webapp;
CREATE DATABASE IF NOT EXISTS webapp;
USE webapp;

-- create table;

DROP TABLE IF EXISTS users ;
CREATE TABLE IF EXISTS users (
    userId bigint(11) NOT NULL AUTO_INCRMENT,
    fullname varchar(50) NOT NULL DEFAULT '',
    username varchar(50) NOT NULL DEFAULT '',
    email varchar(50) NOT NULL DEFAULT '',
    password varchar(60) NOT NULL DEFAULT '',
    userType varchar(30) NOT NULL DEFAULT '',
    userimage varchar(50) NOT NULL DEFAULT '',
);
 
