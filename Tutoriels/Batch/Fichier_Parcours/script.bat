@echo off

for %%f in (*) do call :process %%f
pause
goto :eof

:process
SET file=%1
echo File : %file%
