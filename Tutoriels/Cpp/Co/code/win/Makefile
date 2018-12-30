GSRC = ../src
GMGR = ../src/manager
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GString.o \
    $(GBUILD)/GPrint.o \
    $(GBUILD)/GFree.o \
    $(GBUILD)/GConfig.o \
    $(GBUILD)/GSetting.o \
    $(GBUILD)/GProcess.o \
    $(GBUILD)/GProcessConsole.o \
    $(GBUILD)/GProcessVariable.o \
    
GINCS = \
    -I$(GMGR)
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/GString.o: $(GMGR)/GString.c
	gcc -c $(GMGR)/GString.c -o $(GBUILD)/GString.o $(GINCS)
$(GBUILD)/GPrint.o: $(GMGR)/GPrint.c
	gcc -c $(GMGR)/GPrint.c -o $(GBUILD)/GPrint.o $(GINCS)
$(GBUILD)/GFree.o: $(GMGR)/GFree.c
	gcc -c $(GMGR)/GFree.c -o $(GBUILD)/GFree.o $(GINCS)
$(GBUILD)/GConfig.o: $(GMGR)/GConfig.c
	gcc -c $(GMGR)/GConfig.c -o $(GBUILD)/GConfig.o $(GINCS)
$(GBUILD)/GSetting.o: $(GMGR)/GSetting.c
	gcc -c $(GMGR)/GSetting.c -o $(GBUILD)/GSetting.o $(GINCS)
$(GBUILD)/GProcess.o: $(GMGR)/GProcess.c
	gcc -c $(GMGR)/GProcess.c -o $(GBUILD)/GProcess.o $(GINCS)
$(GBUILD)/GProcessConsole.o: $(GMGR)/GProcessConsole.c
	gcc -c $(GMGR)/GProcessConsole.c -o $(GBUILD)/GProcessConsole.o $(GINCS)
$(GBUILD)/GProcessVariable.o: $(GMGR)/GProcessVariable.c
	gcc -c $(GMGR)/GProcessVariable.c -o $(GBUILD)/GProcessVariable.o $(GINCS)
clean:
	del /q $(GBUILD0)\* $(GBIN)\*
