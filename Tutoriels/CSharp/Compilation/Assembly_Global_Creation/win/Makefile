GBIN=ass
GTARGET=$(GBIN)\HelloGlobalAssembly.dll

GKEY=\
    /keyfile:key/HelloKey.snk
    
GVER=\
    /v:1.0.0.0
    
GDLL=\
    lib\hello\bin\Hello.dll

assembly:
	al $(GKEY) $(GVER) /t:library /out:$(GTARGET) $(GDLL) 
clean:
	del /q $(GTARGET)
	