GSRC=..\src
GBIN=bin
GTARGET=$(GBIN)\GProject.exe

GSRCS=\
    $(GSRC)\*.vb

all:
	vbc /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GTARGET)
	