all: build\main.o
	g++ -o bin\GProject.exe build\main.o
build\main.o: ..\src\main.cpp
	g++ -c ..\src\main.cpp -o build\main.o
clean:
	del /q bin\* build\*
	