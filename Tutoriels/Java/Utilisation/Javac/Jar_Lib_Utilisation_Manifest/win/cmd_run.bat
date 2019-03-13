@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GMAIN=GMain
set CLASSPATH=jar\GMain.jar
set CLASSPATH=lib\GMath.jar;%CLASSPATH%

echo.
java %GMAIN%
echo.

pause
