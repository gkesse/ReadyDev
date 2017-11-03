GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    -Ilib/hello/include

GLIBS = \
    -Llib/hello/bin -lHello

GOBJS = \
    $(GBUILD)/main.o
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS) $(GLIBS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o $(GINCS)
clean:
	del /Q $(GBUILD)\* $(GBIN)\*
