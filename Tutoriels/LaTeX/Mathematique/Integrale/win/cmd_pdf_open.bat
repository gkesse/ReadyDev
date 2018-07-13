@echo off

set PATH=C:\Program Files (x86)\Adobe\Reader 11.0\Reader

set GPDF=%cd%\pdf

AcroRd32 %GPDF%\main.pdf
