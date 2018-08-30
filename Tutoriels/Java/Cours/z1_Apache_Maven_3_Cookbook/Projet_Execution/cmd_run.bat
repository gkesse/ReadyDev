@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GMAIN=com.ready.dev.App
set CLASSPATH=..\Projet_Creer\GProject\target\GProject-1.0-SNAPSHOT.jar

echo.
java %GMAIN%
echo.

pause
