@echo off

set PATH=C:\Program Files (x86)\Jenkins
set PATH=C:\Program Files (x86)\Jenkins\jre\bin;%PATH%

set GJENKINS="C:\Program Files (x86)\Jenkins\jenkins.war"

java -jar %GJENKINS%

pause
