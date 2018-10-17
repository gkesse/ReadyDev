GSRC = ../src
GMGR = ../../manager
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GString.o \
    $(GBUILD)/GConfig.o \
    $(GBUILD)/GStrategy.o \
    $(GBUILD)/GStrategyPython.o \
    $(GBUILD)/GStrategyJava.o
    
GINCS = \
    -I$(GMGR)
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/GString.o: $(GMGR)/GString.c
	gcc -c $(GMGR)/GString.c -o $(GBUILD)/GString.o $(GINCS)
$(GBUILD)/GConfig.o: $(GMGR)/GConfig.c
	gcc -c $(GMGR)/GConfig.c -o $(GBUILD)/GConfig.o $(GINCS)
$(GBUILD)/GStrategy.o: $(GMGR)/GStrategy.c
	gcc -c $(GMGR)/GStrategy.c -o $(GBUILD)/GStrategy.o $(GINCS)
$(GBUILD)/GStrategyPython.o: $(GMGR)/GStrategyPython.c
	gcc -c $(GMGR)/GStrategyPython.c -o $(GBUILD)/GStrategyPython.o $(GINCS)
$(GBUILD)/GStrategyJava.o: $(GMGR)/GStrategyJava.c
	gcc -c $(GMGR)/GStrategyJava.c -o $(GBUILD)/GStrategyJava.o $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
