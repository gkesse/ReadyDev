@echo off

set PATH=C:\Program Files (x86)\CMake\bin
set PATH=C:\MinGW\bin;%PATH%

cd build
cmake .. ^
-G "MinGW Makefiles" ^
-DCMAKE_BUILD_TYPE=RELEASE ^
-DCMAKE_C_COMPILER=gcc ^
-DCMAKE_CXX_COMPILER=g++
cd ..
