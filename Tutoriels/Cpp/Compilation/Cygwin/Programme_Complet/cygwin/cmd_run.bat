@echo off

set PATH=C:\cygwin\bin
set PATH=..\lib\hello\bin;%PATH%

echo.
cd bin
GProject
cd ..
echo.
pause
