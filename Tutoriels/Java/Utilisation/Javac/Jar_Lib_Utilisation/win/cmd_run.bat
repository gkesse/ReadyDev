@echo off

set PATH=C:\Program Files (x86)\Java\jdk1.8.0_77\bin

set GMAIN=GMain
set CLASSPATH=jar\GMain.jar
set CLASSPATH=lib\GMath.jar;%CLASSPATH%


echo.
java %GMAIN%
echo.

pause
