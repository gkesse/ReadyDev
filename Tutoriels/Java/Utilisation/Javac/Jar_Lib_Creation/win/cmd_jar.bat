@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GBUILD=build
set GJAR=jar\GMath.jar

echo.
jar cvf %GJAR% ^
-C %GBUILD% .
echo.
