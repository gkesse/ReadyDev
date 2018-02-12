@echo off

setlocal ENABLEDELAYEDEXPANSION
set word=table
set str="jump over the chair"
set str=%str:chair=!word!%
echo %str%
pause
