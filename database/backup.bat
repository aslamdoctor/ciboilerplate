@echo off
:start
SET /P _db_name= Please enter database name : 
mysqldump -u root -p %_db_name% > database.sql
pause