@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build
set GSRCPATH=%GSRC%\manager

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%
