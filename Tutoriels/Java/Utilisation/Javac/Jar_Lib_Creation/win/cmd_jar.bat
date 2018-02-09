@echo off

set PATH=C:\Program Files (x86)\Java\jdk1.8.0_77\bin

set GBUILD=build
set GJAR=jar\GMath.jar

echo.
jar cvf %GJAR% ^
-C %GBUILD% .
echo.
