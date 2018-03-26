GSRC = ..\src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\GProject.exe

GOBJS = \
	$(GBUILD)\main.o \
	$(GBUILD)\GSingleton.o

all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)\main.o: $(GSRC)\main.cpp
	g++ -c $(GSRC)\main.cpp -o $(GBUILD)\main.o
$(GBUILD)\GSingleton.o: $(GSRC)\GSingleton.cpp
	g++ -c $(GSRC)\GSingleton.cpp -o $(GBUILD)\GSingleton.o
clean:
	del /q $(GBIN)\* $(GBUILD)\*
	