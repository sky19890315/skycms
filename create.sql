CREATE DATABASE mydb DEFAULT CHARACTER SET UTF8;

USE mydb;

SET NAMES UTF8;

CREATE TABLE cmsarticles(
id    INT(6)  PRIMARY KEY AUTO_INCREMENT NOT NULL  COMMENT 'the unique Id of the article',
title   VARCHAR(300) NULL COMMENT 'the article title',
tagline VARCHAR(600) NULL COMMENT 'short summary of the article',
section INT(4)  NULL DEFAULT  0 COMMENT 'the section of the article',
thearticle TEXT NULL COMMENT 'the article itself'
);

SHOW CREATE TABLE cmsarticles;

INSERT cmsarticles(title,tagline,section,thearticle)VALUE("testsql","test","3","sky");

SELECT * FROM  cmsarticles;

CREATE TABLE cmssetions(
id INT(4) unsigned NOT NULL auto_increment comment 'the unique id of the session',
name VARCHAR(20)  NULL comment 'the session name',
parentid INT(4)  NULL DEFAULT 0 comment 'the id of the parent section ',
PRIMARY KEY (id)
);