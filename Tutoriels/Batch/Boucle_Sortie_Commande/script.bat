@echo off

for /f %%x in ('dir /b /ad "."') do (
echo Value : %%x
)
pause
