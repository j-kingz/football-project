-- create database
DROP DATABASE IF EXISTS webapp;
CREATE DATABASE IF NOT EXISTS webapp;
USE webapp;

-- create table;

DROP TABLE IF EXISTS users ;
CREATE TABLE IF NOT EXISTS users (
    userId bigint(11) NOT NULL AUTO_INCRMENT,
    fullname varchar(50) NOT NULL DEFAULT '',
    username varchar(50) NOT NULL DEFAULT '',
    email varchar(50) NOT NULL DEFAULT '',
    password varchar(60) NOT NULL DEFAULT '',
    userType varchar(30) NOT NULL DEFAULT '',
    userImage varchar(50) NOT NULL DEFAULT 'userImage. jpg',
    created bigint(10)NOT NULL DEFAULT 0,
    updated bigint(10)NOT NULL DEFAULT 0,

);
 
