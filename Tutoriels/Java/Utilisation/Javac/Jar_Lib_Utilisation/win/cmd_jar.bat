@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GBUILD=build
set GJAR=jar\GMain.jar
set GMAIN=GMain

echo.
jar cvfe %GJAR% %GMAIN% ^
-C %GBUILD% .
echo.
