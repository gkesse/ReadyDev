@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio 12.0\VC\bin
set PATH=C:\Program Files (x86)\Microsoft SDKs\Windows\v8.1A\bin\NETFX 4.5.1 Tools;%PATH%
set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Community\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake assembly
