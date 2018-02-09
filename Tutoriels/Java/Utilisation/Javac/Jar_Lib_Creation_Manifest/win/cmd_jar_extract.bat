@echo off

set PATH=C:\Program Files (x86)\Java\jdk1.8.0_77\bin

set GJAR=jar\GMath.jar
set GEXTRACT=extract

cd %GEXTRACT%
echo.
jar xvf ..\%GJAR%
echo.
cd ..
