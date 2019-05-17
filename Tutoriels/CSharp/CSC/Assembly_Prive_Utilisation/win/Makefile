GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe

GLIBS =\
    /lib:lib\Hello\bin \
    /r:HelloAssembly.dll

GSRCS=\
    $(GSRC)\*.cs

all:
	csc $(GLIBS) /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe
	