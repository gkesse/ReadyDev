GSRC = ../src
GMGR = ../../manager
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GMap.o
    
GINCS = \
    -I$(GMGR)
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/GMap.o: $(GMGR)/GMap.c
	gcc -c $(GMGR)/GMap.c -o $(GBUILD)/GMap.o $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
