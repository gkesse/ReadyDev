GSRC = ../src
GMGR = ../src/manager
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe
    
GINCS = \
    -I$(GMGR)
    
GOBJS = \
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
    $(patsubst $(GMGR)/%.c, $(GBUILD)/%.o, $(wildcard $(GMGR)/*.c))
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS) $(GLIBS)
$(GBUILD)/%.o: $(GSRC)/%.c
	gcc -c $< -o $@ $(GINCS)
$(GBUILD)/%.o: $(GSRC)/manager/%.c
	gcc -c $< -o $@ $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
