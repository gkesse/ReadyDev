@echo off

set PATH=C:\Program Files\MiKTeX 2.9\miktex\bin\x64

set GSRC=..\src
set GBUILD=build

latex %GSRC%\main.tex ^
-aux-directory %GBUILD% ^
-output-directory %GBUILD%
