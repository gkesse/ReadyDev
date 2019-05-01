GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\Hello.dll

GSRCS =\
    $(GSRC)\manager\*.cs

all:
	csc /t:module /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.dll
	