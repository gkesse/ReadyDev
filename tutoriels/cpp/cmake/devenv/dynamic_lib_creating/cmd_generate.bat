@echo off

set PATH=C:\Program Files (x86)\CMake\bin

cd build
cmake .. ^
-G"Visual Studio 12 2013" ^
-DCMAKE_CONFIGURATION_TYPES=RELEASE
cd ..
