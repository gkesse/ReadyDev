GSRC = ../src
GMGR = ../../manager
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GString.o \
    $(GBUILD)/GSingleton.o \
    
GINCS = \
    -I"../../manager"
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/GString.o: $(GMGR)/GString.c
	gcc -c $(GMGR)/GString.c -o $(GBUILD)/GString.o $(GINCS)
$(GBUILD)/GSingleton.o: $(GMGR)/GSingleton.c
	gcc -c $(GMGR)/GSingleton.c -o $(GBUILD)/GSingleton.o $(GINCS)
clean:
	del /q $(GBUILD)\* $(GBIN)\*
