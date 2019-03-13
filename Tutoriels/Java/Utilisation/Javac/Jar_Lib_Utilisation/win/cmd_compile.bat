@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build
set GSRCPATH=..\src
set CLASSPATH=lib\GMath.jar

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%
