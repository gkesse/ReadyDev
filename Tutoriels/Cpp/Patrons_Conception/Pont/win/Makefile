GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GConfig.o \
    $(GBUILD)/GDraw.o \
    $(GBUILD)/GDrawNoFill.o \
    $(GBUILD)/GDrawFill.o \
    $(GBUILD)/GShape.o \
    $(GBUILD)/GShapeCircle.o
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o
$(GBUILD)/GConfig.o: $(GSRC)/GConfig.cpp
	g++ -c $(GSRC)/GConfig.cpp -o $(GBUILD)/GConfig.o
$(GBUILD)/GDraw.o: $(GSRC)/GDraw.cpp
	g++ -c $(GSRC)/GDraw.cpp -o $(GBUILD)/GDraw.o
$(GBUILD)/GDrawNoFill.o: $(GSRC)/GDrawNoFill.cpp
	g++ -c $(GSRC)/GDrawNoFill.cpp -o $(GBUILD)/GDrawNoFill.o
$(GBUILD)/GDrawFill.o: $(GSRC)/GDrawFill.cpp
	g++ -c $(GSRC)/GDrawFill.cpp -o $(GBUILD)/GDrawFill.o
$(GBUILD)/GShape.o: $(GSRC)/GShape.cpp
	g++ -c $(GSRC)/GShape.cpp -o $(GBUILD)/GShape.o
$(GBUILD)/GShapeCircle.o: $(GSRC)/GShapeCircle.cpp
	g++ -c $(GSRC)/GShapeCircle.cpp -o $(GBUILD)/GShapeCircle.o
clean:
	del /q $(GBUILD)\* $(GBIN)\*
