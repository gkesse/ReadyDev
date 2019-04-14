GSRC=..\src
GBIN=lib
GTARGET=$(GBIN)\Hello.dll

GSRCS=\
    $(GSRC)\*.cs

all:
	csc /t:module /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe
	