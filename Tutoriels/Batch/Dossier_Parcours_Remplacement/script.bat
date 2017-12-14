@echo off

for /f %%i in ('dir /b /ad "."') do call :process %%~ni
pause
goto :eof

:process
SET folder=%1
set name=%folder:Soft=%
echo Folder : %folder% - %name%
move %folder% %name%
