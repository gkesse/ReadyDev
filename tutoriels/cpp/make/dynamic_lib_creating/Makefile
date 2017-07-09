BIN = lib
BUILD = build
TARGET = $(BIN)/libHello.so

INCS = \
    -Imanager
    
OBJS = \
    $(BUILD)/GShow.o \
    $(BUILD)/GMath.o
    
all: $(OBJS)
	g++ -shared -o $(TARGET) $(OBJS)
$(BUILD)/GShow.o: manager/GShow.cpp
	g++ -c -fPIC manager/GShow.cpp -o $(BUILD)/GShow.o $(INCS)
$(BUILD)/GMath.o: manager/GMath.cpp
	g++ -c -fPIC manager/GMath.cpp -o $(BUILD)/GMath.o $(INCS)
clean:
	rm -f $(BUILD)/* $(BIN)/*
