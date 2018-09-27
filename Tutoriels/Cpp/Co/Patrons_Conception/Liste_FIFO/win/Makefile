GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o
    
GINCS = \
    -I"../../manager"
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
