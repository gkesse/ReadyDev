GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe
GFLAGS = -std=c++17

GOBJS = \
    $(GBUILD)/main.o
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GFLAGS) $(GSRC)/main.cpp -o $(GBUILD)/main.o
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
