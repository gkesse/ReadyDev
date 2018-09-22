@echo off

rd /q /s build\CMakeFiles
rd /q /s build\src
del /q build\*.txt
del /q build\*.cmake
del /q build\Makefile
