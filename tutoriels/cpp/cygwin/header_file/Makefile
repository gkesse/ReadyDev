BIN = bin
BUILD = build
TARGET = $(BIN)\main.exe

INCS = \
    -Imanager
    
OBJS = \
    $(BUILD)\main.o \
    $(BUILD)\GShow.o \
    $(BUILD)\GMath.o
    
all: $(OBJS)
	g++ -o $(TARGET) $(OBJS)
$(BUILD)\main.o: main.cpp
	g++ -c main.cpp -o $(BUILD)\main.o $(INCS)
$(BUILD)\GShow.o: manager/GShow.cpp
	g++ -c manager/GShow.cpp -o $(BUILD)\GShow.o $(INCS)
$(BUILD)\GMath.o: manager/GMath.cpp
	g++ -c manager/GMath.cpp -o $(BUILD)\GMath.o $(INCS)
clean:
	rm -f $(BUILD)/* $(BIN)/*
