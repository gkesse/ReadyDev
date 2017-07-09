BIN = bin
BUILD = build
TARGET = $(BIN)/main.exe

INCS = \
    -Ilib/hello
    
LIBS = \
    -Llib/hello -lHello
    
OBJS = \
    $(BUILD)/main.o
    
all: $(OBJS)
	g++ -o $(TARGET) $(OBJS) $(LIBS)
$(BUILD)/main.o: main.cpp
	g++ -c main.cpp -o $(BUILD)/main.o $(INCS)
clean:
	rm -f $(BUILD)/* $(BIN)/*
