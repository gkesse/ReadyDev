@echo off

del /q build\*.class
rmdir /q /s build\com
del /q jar\*.jar
del /q extract\*.class
rmdir /q /s extract\com
rmdir /q /s extract\META-INF
