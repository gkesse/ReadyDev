GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    /I$(GSRC)/manager \
    /Ilib/hello/include

GLIBS = \
    /LIBPATH:lib/hello/lib Hello.lib
        
GOBJS = \
    $(GBUILD)/main.obj \
    $(GBUILD)/GProcess.obj
    
all: $(GOBJS)
	link /OUT:$(GTARGET) $** $(GLIBS)
{$(GSRC)}.cpp{$(GBUILD)}.obj:
	cl /c /EHsc $< /Fo$@ $(GINCS)
{$(GSRC)/manager}.cpp{$(GBUILD)}.obj:
	cl /c /EHsc $< /Fo$@ $(GINCS)
clean:
	del /Q $(GBUILD)\* $(GBIN)\*
 