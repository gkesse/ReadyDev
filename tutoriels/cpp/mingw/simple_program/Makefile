BIN = bin
BUILD = build
TARGET = $(BIN)\main.exe

OBJS = \
    $(BUILD)\main.o
    
all: $(OBJS)
	g++ -o $(TARGET) $(OBJS)
$(BUILD)\main.o: main.cpp
	g++ -c main.cpp -o $(BUILD)\main.o
clean:
	del /Q $(BUILD)\* $(BIN)\*
