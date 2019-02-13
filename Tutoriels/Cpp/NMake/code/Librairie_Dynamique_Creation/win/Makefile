GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/Hello.dll

GINCS = \
    /I../src/manager
    
GOBJS = \
    $(GBUILD)/GShow.obj \
    $(GBUILD)/GMath.obj
    
all: $(GOBJS)
	link /DLL /OUT:$(GTARGET) $(GOBJS)
$(GBUILD)/GShow.obj: $(GSRC)/manager/GShow.cpp
	cl /c /EHsc /DDLL_APP $(GSRC)/manager/GShow.cpp /Fo$(GBUILD)/GShow.obj $(GINCS)
$(GBUILD)/GMath.obj: $(GSRC)/manager/GMath.cpp
	cl /c /EHsc /DDLL_APP $(GSRC)/manager/GMath.cpp /Fo$(GBUILD)/GMath.obj $(GINCS)
clean:
	del /q $(GBUILD)\*.obj $(GBIN)\*.dll $(GBIN)\*.lib $(GBIN)\*.exp
