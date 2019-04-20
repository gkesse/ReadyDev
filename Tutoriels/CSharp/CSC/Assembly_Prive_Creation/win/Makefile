GBIN = bin
GTARGET = $(GBIN)\HelloAssembly.dll

GLIBS =\
    lib\Hello\bin\Hello.dll

assembly:
	al /t:library /out:$(GTARGET) $(GLIBS) 
clean:
	del /q $(GBIN)\*.dll
	