@echo off

set GSRC_DIR=C:\Users\TiaGerard\Programs\ZairStudio\ReadyDev\css
set GDST_DIR=C:\Users\TiaGerard\Programs\ZairStudio\ReadyDev\Tutoriels\Cpp\Patron_Conception\Comportement
set GSRC_FILE=%GSRC_DIR%\index.php

for /f %%i in ('dir /b /ad "%GDST_DIR%"') do call :process %%~ni
pause
goto :eof

:process
SET GDIR=%1
SET GDST_PATH=%GDST_DIR%\%GDIR%
echo %GDST_PATH%
xcopy %GSRC_FILE% %GDST_PATH% /Y
