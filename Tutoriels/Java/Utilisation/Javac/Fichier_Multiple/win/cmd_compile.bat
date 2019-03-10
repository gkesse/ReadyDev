@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build
set GMGR=%GSRC%\manager

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GMGR%
