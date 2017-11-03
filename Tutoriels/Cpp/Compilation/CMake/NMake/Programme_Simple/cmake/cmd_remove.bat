@echo off

del /Q build\*
for /d %%i in (build\*) do rd "%%i" /Q /S
