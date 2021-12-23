CREATE TABLE commentstable if not exist(
id int PRIMARY KEY AUTO_INCREMENT,
pageurl varchar(255),
name varchar(255),
email varchar(255),
website varchar(255),
comments text,
pubdate date,
ip INT
);
