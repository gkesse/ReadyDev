GBIN = bin
GTARGET = $(GBIN)\HelloGlobalAssembly.dll

GKEYS =\
    /keyfile:lib\Hello\key\HelloKey.snk \
    /v:1.0.0.0
    
GLIBS =\
    lib\Hello\bin\Hello.dll

assembly:
	al $(GKEYS) /t:library /out:$(GTARGET) $(GLIBS) 
clean:
	del /q $(GBIN)\*.dll
	