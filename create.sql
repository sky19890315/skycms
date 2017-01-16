CREATE DATABASE mydb DEFAULT CHARACTER SET UTF8;

USE mydb;

SET NAMES UTF8;

CREATE TABLE cmsarticles(
Id    INT(6)  PRIMARY KEY AUTO_INCREMENT NOT NULL  COMMENT 'the unique Id of the article',
Title   VARCHAR(300) NULL COMMENT 'the article title',
Tagline VARCHAR(600) NULL COMMENT 'short summary of the article',
Section INT(4)  NULL DEFAULT  0 COMMENT 'the section of the article',
TheArticle TEXT NULL COMMENT 'the article itself'
);

SHOW CREATE TABLE cmsarticles;

INSERT cmsarticles(Title,Tagline,Section,TheArticle)VALUE("testsql","test","3","sky");

SELECT * FROM  cmsarticles;