@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GROOT=..
set GGROUPID=com.ready.dev
set GARTIFACTID=GProject

cd %GROOT%
mvn archetype:generate ^
-DgroupId=%GGROUPID% ^
-DartifactId=%GARTIFACTID%
