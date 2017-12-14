@echo off

for /f %%i in ('dir /b /ad "."') do call :process %%i %%~ti
pause
goto :eof

:process
SET folder=%1
SET date=%2
echo Folder : %folder% - %date%
