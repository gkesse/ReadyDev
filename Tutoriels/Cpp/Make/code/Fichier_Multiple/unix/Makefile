GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    -I$(GSRC)/manager
    
GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GShow.o \
    $(GBUILD)/GMath.o
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/GShow.o: $(GSRC)/manager/GShow.cpp
	g++ -c $(GSRC)/manager/GShow.cpp -o $(GBUILD)/GShow.o $(GINCS)
$(GBUILD)/GMath.o: $(GSRC)/manager/GMath.cpp
	g++ -c $(GSRC)/manager/GMath.cpp -o $(GBUILD)/GMath.o $(GINCS)
clean:
	rm -f $(GBUILD)/*.o $(GBIN)/*.exe
