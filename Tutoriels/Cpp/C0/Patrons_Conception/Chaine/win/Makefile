GSRC = ../src
GMGR = ../../manager
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GString.o
    
GINCS = \
    -I$(GMGR)
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/GString.o: $(GMGR)/GString.c
	gcc -c $(GMGR)/GString.c -o $(GBUILD)/GString.o $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
