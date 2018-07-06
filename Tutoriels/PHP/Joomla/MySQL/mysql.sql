-- ==============================================
-- Créer une base de données
-- ==============================================
create database `joomladb`;
show databases;
-- ==============================================
-- Créer un utilisateur
-- ==============================================
create user 'kesse'@'localhost' identified by 'kpass';
select host, user from mysql.user;
-- ==============================================
-- Lier un utilisateur à une base de données
-- ==============================================
grant all privileges on `joomladb`.* to 'kesse'@'localhost' identified by 'kpass';
show grants for 'kesse'@'localhost';
-- ==============================================
