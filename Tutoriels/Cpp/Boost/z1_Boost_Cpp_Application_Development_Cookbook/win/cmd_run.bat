@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\x86_64-8.1.0-release-win32-sjlj-rt_v6-rev0\mingw64\bin

echo.
bin\GProject --help
bin\GProject --apples=10 --oranges=20
bin\GProject -a 30 -o 40 --name="Gerard KESSE"
bin\GProject
echo.

pause
