@echo off
 
set PATH=C:\Users\sabine\Downloads\Gerard\ngspice-28_64\Spice64\bin
 
set GSRC=..\src
 
echo.
ngspice %GSRC%\main.cir
echo.
 
pause