@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Windows Kits\10\bin\10.0.17763.0\x86;%PATH%

set INCLUDE=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\include
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\um;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\shared;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\ucrt;%INCLUDE%

set LIB=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\lib\x86
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\um\x86;%LIB%
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\ucrt\x86;%LIB%

nmake
