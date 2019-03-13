@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GBUILD=build
set GJAR=jar\GMain.jar
set GMANIFEST=MANIFEST.MF

echo.
jar cvmf %GMANIFEST% %GJAR% ^
-C %GBUILD% .
echo.
