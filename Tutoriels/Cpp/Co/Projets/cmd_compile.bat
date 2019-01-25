 @echo off

set PATH=C:\MinGW\bin
set PATH=C:\Users\sabine\Downloads\Gerard\gtk+-bundle_2.24.10-20120208_win32\bin;%PATH%

set GGTK_VERSION=gtk+-2.0
pkg-config %GGTK_VERSION% --cflags >tmp.txt
set /p GGTK_INCS= <tmp.txt
del tmp.txt
pkg-config %GGTK_VERSION% --libs >tmp2.txt
set /p GGTK_LIBS= <tmp2.txt
del tmp2.txt

mingw32-make