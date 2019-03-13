@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GBUILD=build
set GJAR=jar\GMath.jar
set GMANIFEST=MANIFEST.MF

echo.
jar cvfm %GJAR% %GMANIFEST% ^
-C %GBUILD% .
echo.
