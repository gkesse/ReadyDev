all: build\main.o build\hello.o
	g++ -o bin\GProject.exe build\main.o build\hello.o
build\main.o: ..\src\main.cpp
	g++ -c ..\src\main.cpp -o build\main.o -I..\src\manager
build\hello.o: ..\src\manager\hello.cpp
	g++ -c ..\src\manager\hello.cpp -o build\hello.o -I..\src\manager
clean:
	del /q bin\* build\*
	