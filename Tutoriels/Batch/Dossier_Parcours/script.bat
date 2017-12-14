@echo off

for /f %%i in ('dir /b /ad "."') do call :process %%i
pause
goto :eof

:process
SET folder=%1
echo Folder : %folder%
