@echo off

for /f %%i in ('dir /b /ad "."') do call :process %%i %%~zi
pause
goto :eof

:process
SET folder=%1
SET size=%2 octets
echo Folder : %folder% - %size%
