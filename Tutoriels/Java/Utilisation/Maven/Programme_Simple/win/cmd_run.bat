@echo off

set PATH=C:\Program Files (x86)\Java\jdk1.8.0_77\bin

set GMAIN=com.ready.dev.App
set CLASSPATH=..\GProject\target\GProject-1.0-SNAPSHOT.jar

echo.
java %GMAIN%
echo.

pause
