GSRC = ../src
GBIN = lib
GBUILD = build
GTARGET = $(GBIN)/libHello.dll

GINCS = \
    -I$(GSRC)/manager
    
GOBJS = \
    $(GBUILD)/GShow.o \
    $(GBUILD)/GMath.o
    
all: $(GOBJS)
	g++ -shared -o $(GTARGET) $(GOBJS)
$(GBUILD)/GShow.o: $(GSRC)/manager/GShow.cpp
	g++ -c -DDLL_APP $(GSRC)/manager/GShow.cpp -o $(GBUILD)/GShow.o $(GINCS)
$(GBUILD)/GMath.o: $(GSRC)/manager/GMath.cpp
	g++ -c -DDLL_APP $(GSRC)/manager/GMath.cpp -o $(GBUILD)/GMath.o $(GINCS)
clean:
	del /Q $(GBUILD)\* $(GBIN)\*
