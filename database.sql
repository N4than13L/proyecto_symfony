    CREATE DATABASE IF NOT EXISTS symfony_master; 

    USE symfony_master;

CREATE TABLE IF NOT EXISTS users(
    id int(255) AUTO_INCREMENT NOT NULL,
    role VARCHAR(50),
    name VARCHAR(100),
    surname VARCHAR(200),
    email VARCHAR(255),
    password VARCHAR(255),
    created_at DATETIME,
    CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS tasks(
    id int(255) AUTO_INCREMENT NOT NULL,
    user_id int(255) NOT NULL,
    title VARCHAR(255),
    content TEXT,
    priority VARCHAR(20),
    hours INT(100),
    created_at DATETIME,
    CONSTRAINT pk_task PRIMARY KEY(id),
    CONSTRAINT pk_task_user Foreign Key (user_id) REFERENCES users(id)
)ENGINE=InnoDB;