GSRC = ../src
GMGR = ../../manager
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GClass.o
    
GINCS = \
    -I$(GMGR)
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/GClass.o: $(GMGR)/GClass.c
	gcc -c $(GMGR)/GClass.c -o $(GBUILD)/GClass.o $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
