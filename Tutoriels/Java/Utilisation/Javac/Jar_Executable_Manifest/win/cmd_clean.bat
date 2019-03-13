@echo off

del /q build\*.class
rmdir /q /s build\manager
del /q jar\*.jar
del /q extract\*.class
rmdir /q /s extract\manager
rmdir /q /s extract\META-INF
