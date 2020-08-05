@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio 12.0\VC\bin
set PATH=C:\Program Files (x86)\Windows Kits\8.1\bin\x86;%PATH%

set INCLUDE="C:\Program Files (x86)\Microsoft Visual Studio 12.0\VC\include"
set INCLUDE="C:\Program Files (x86)\Windows Kits\8.1\Include\um";%INCLUDE%
set INCLUDE="C:\Program Files (x86)\Windows Kits\8.1\Include\shared";%INCLUDE%

set LIB="C:\Program Files (x86)\Microsoft Visual Studio 12.0\VC\lib"
set LIB="C:\Program Files (x86)\Windows Kits\8.1\Lib\winv6.3\um\x86";%LIB%

nmake