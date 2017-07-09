@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio 12.0\Common7\IDE

devenv build\GMain.sln ^
/rebuild Release ^
/project build\main.vcxproj ^
/projectconfig Release
