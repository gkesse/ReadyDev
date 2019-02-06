GSRC = ../src
GMGR = ../../manager
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GModule.o
    
GINCS = \
    -I$(GMGR)
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/GModule.o: $(GMGR)/GModule.c
	gcc -c $(GMGR)/GModule.c -o $(GBUILD)/GModule.o $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
