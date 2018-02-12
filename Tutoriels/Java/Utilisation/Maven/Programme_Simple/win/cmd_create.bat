@echo off

set PATH=C:\dev\Maven\apache-maven-3.3.9\bin;%PATH%
set JAVA_HOME=C:\Program Files (x86)\Java\jdk1.8.0_77

set GROOT=..
set GGROUPID=com.ready.dev
set GARTIFACTID=GProject

cd %GROOT%
mvn archetype:generate ^
-DgroupId=%GGROUPID% ^
-DartifactId=%GARTIFACTID%
