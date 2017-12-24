@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio 12.0\VC\bin
set PATH=C:\Program Files (x86)\Microsoft SDKs\Windows\v8.1A\bin\NETFX 4.5.1 Tools;%PATH%

nmake assembly
pause
