GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    /Ilib/Hello/include
    
GLIBS = \
    /LIBPATH:lib/hello/lib Hello.lib
    
GOBJS = \
    $(GBUILD)/main.obj
    
all: $(GOBJS)
	link /OUT:$(GTARGET) $(GOBJS) $(GLIBS)
$(GBUILD)/main.obj: $(GSRC)/main.cpp
	cl /c /EHsc $(GSRC)/main.cpp /Fo$(GBUILD)/main.obj $(GINCS)
clean:
	del /q $(GBUILD)\*.obj $(GBIN)\*.exe
