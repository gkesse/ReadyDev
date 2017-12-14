@echo off

call :GFunction1
call :GFunction2
pause
goto :eof

:GFunction1
echo Hello World !
goto :eof

:GFunction2
echo Welcome to Batch !
goto :eof
