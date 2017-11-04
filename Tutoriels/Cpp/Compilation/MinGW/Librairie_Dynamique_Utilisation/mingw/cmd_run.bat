@echo off

set PATH=C:\MinGW\bin
set PATH=..\lib\hello\bin;%PATH%

echo.
cd bin
GProject
cd ..
echo.
pause

