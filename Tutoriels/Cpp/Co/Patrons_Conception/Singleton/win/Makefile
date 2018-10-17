GSRC = ../src
GMGR = ../../manager
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GSingleton.o
    
GINCS = \
    -I$(GMGR)
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/GSingleton.o: $(GMGR)/GSingleton.c
	gcc -c $(GMGR)/GSingleton.c -o $(GBUILD)/GSingleton.o $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
