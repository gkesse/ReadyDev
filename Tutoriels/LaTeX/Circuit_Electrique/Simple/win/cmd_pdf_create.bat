@echo off

set PATH=C:\Program Files\MiKTeX 2.9\miktex\bin\x64

set GBUILD=build
set GPDF=pdf

dvipdfm %GBUILD%\main.dvi ^
-o %GPDF%\main.pdf
