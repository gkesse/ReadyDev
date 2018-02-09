@echo off

set PATH=C:\Program Files (x86)\Java\jdk1.8.0_77\bin

set GBUILD=build
set GJAR=jar\GMain.jar
set GMANIFEST=MANIFEST.MF

echo.
jar cvmf %GMANIFEST% %GJAR% ^
-C %GBUILD% .
echo.

