@echo off

set PATH=C:\Program Files (x86)\Java\jdk1.8.0_77\bin

set GSRC=..\src
set GBUILD=build
set GSRCPATH=..\src
set CLASSPATH=lib\GMath.jar


javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%
