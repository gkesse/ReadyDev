GSRC=..\src
GBIN=lib
GTARGET=$(GBIN)\Hello.dll

GSRCS=\
    $(GSRC)\*.cs

all:
	csc /t:library /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*
	