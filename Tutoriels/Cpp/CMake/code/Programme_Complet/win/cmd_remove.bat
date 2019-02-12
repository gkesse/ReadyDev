@echo off

rd /q /s build\CMakeFiles
rd /q /s build\manager
del /q build\*.txt
del /q build\*.cmake
del /q build\*.exe
del /q build\Makefile
