 @echo off

set PATH=C:\Users\sabine\Downloads\Gerard\x86_64-8.1.0-release-win32-sjlj-rt_v6-rev0\mingw64\bin
set PATH=C:\Users\sabine\Downloads\Gerard\gtk+-bundle_3.6.4-20130513_win64\bin;%PATH%

set GGTK_VERSION=gtk+-3.0
pkg-config %GGTK_VERSION% --cflags >tmp.txt
set /p GGTK_INCS= <tmp.txt
del tmp.txt
pkg-config %GGTK_VERSION% --libs >tmp2.txt
set /p GGTK_LIBS= <tmp2.txt
del tmp2.txt

mingw32-make