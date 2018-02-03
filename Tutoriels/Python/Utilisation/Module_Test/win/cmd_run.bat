@echo off

set PATH=C:\Python27

set GSRC=..\src

echo.
echo ### Module Test Interne
echo.
python %GSRC%\GMath.py
echo.
echo ### Module Test Externe
echo.
python %GSRC%\main.py
echo.

pause
