GSRC = ../src
GBIN = lib
GBUILD = build
GTARGET = $(GBIN)/libHello.a

GINCS = \
    -I$(GSRC)/manager
    
GOBJS = \
    $(GBUILD)/GShow.o \
    $(GBUILD)/GMath.o
    
all: $(GOBJS)
	ar rcs $(GTARGET) $(GOBJS)
$(GBUILD)/GShow.o: $(GSRC)/manager/GShow.cpp
	g++ -c $(GSRC)/manager/GShow.cpp -o $(GBUILD)/GShow.o $(GINCS)
$(GBUILD)/GMath.o: $(GSRC)/manager/GMath.cpp
	g++ -c $(GSRC)/manager/GMath.cpp -o $(GBUILD)/GMath.o $(GINCS)
clean:
	del /Q $(GBUILD)\* $(GBIN)\*
