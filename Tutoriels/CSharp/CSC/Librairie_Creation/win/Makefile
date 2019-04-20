GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\Hello.dll

GSRCS =\
    $(GSRC)\manager\*.cs

all:
	csc /t:library /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.dll
	