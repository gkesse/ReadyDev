@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src\com\ready\dev
set GBUILD=build
set GSRCPATH=..\src

javac %GSRC%\*.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%
