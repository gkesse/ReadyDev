GSRC=..\src
GBIN=bin
GTARGET=$(GBIN)\GProject.exe

GSRCS=\
    $(GSRC)\*.cs \
    $(GSRC)\manager\*.cs

all:
	csc /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe
	