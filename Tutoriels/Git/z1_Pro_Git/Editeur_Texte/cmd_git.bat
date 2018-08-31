@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

git config --global core.editor ^
"'C:/Program Files (x86)/Notepad++/notepad++.exe' -multiInst -notabbar -nosession -noPlugin"

echo.
pause
