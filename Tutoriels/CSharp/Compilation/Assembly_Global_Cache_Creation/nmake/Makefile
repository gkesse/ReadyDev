GBIN=ass
GGAC=HelloGlobalAssembly
GTARGET=$(GBIN)\$(GGAC).dll


assembly:
	gacutil /i $(GTARGET)
clean:
	gacutil -u $(GGAC)
	