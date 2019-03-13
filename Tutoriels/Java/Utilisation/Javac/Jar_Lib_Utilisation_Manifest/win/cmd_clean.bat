@echo off

del /q build\*.class
del /q jar\*.jar
del /q extract\*.class
rmdir /q /s extract\META-INF
