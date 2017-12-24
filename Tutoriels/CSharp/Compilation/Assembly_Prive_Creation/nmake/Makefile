GBIN=ass
GTARGET=$(GBIN)\HelloAssembly.dll

GDLL=\
    lib\hello\bin\Hello.dll

assembly:
	al /t:library /out:$(GTARGET) $(GDLL) 
clean:
	del /q $(GTARGET)
	