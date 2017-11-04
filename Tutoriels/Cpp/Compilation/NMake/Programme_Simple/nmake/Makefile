GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.obj
    
all: $(GOBJS)
	link /OUT:$(GTARGET) $(GOBJS)
$(GBUILD)/main.obj: $(GSRC)/main.cpp
	cl /c /EHsc $(GSRC)/main.cpp /Fo$(GBUILD)/main.obj
clean:
	del /Q $(GBUILD)\* $(GBIN)\*
