GSRC = ../src
GBIN = lib
GBUILD = build
GTARGET = $(GBIN)/Hello.lib

GINCS = \
    /I$(GSRC)/manager
    
GOBJS = \
    $(GBUILD)/GShow.obj \
    $(GBUILD)/GMath.obj
    
all: $(GOBJS)
	lib /OUT:$(GTARGET) $(GOBJS)
$(GBUILD)/GShow.obj: $(GSRC)/manager/GShow.cpp
	cl /c /EHsc $(GSRC)/manager/GShow.cpp /Fo$(GBUILD)/GShow.obj $(GINCS)
$(GBUILD)/GMath.obj: $(GSRC)/manager/GMath.cpp
	cl /c /EHsc $(GSRC)/manager/GMath.cpp /Fo$(GBUILD)/GMath.obj $(GINCS)
clean:
	del /Q $(GBUILD)\* $(GBIN)\*
