@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GJAR=jar\GMath.jar
set GEXTRACT=extract

cd %GEXTRACT%
echo.
jar xvf ..\%GJAR%
echo.
cd ..
