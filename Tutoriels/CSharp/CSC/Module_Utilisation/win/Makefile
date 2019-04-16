GSRC=..\src
GBIN=bin
GTARGET=$(GBIN)\GProject.exe

GLIB=\
    /lib:bin

GDLL=\
    /addmodule:Hello.dll

GSRCS=\
    $(GSRC)\*.cs

all:
	csc $(GLIB) $(GDLL) /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GTARGET)
	