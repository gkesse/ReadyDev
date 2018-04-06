GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
	-I../src/manager

GOBJS = \
	$(GBUILD)/main.o \
	$(GBUILD)/hello.o

all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/hello.o: $(GSRC)/manager/hello.cpp
	g++ -c $(GSRC)/manager/hello.cpp -o $(GBUILD)/hello.o $(GINCS)
clean:
	del /q $(GBIN)\* $(GBUILD)\*
	