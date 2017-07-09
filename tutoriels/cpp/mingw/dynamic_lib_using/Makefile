BIN = bin
BUILD = build
TARGET = $(BIN)\main.exe

LIBS = \
    -Llib\hello -lHello

INCS = \
    -Ilib\hello

OBJS = \
    $(BUILD)\main.o
    
all: $(OBJS)
	g++ -o $(TARGET) $(OBJS) $(LIBS)
$(BUILD)\main.o: main.cpp
	g++ -c main.cpp -o $(BUILD)\main.o $(INCS)
clean:
	del $(OBJS) $(TARGET)
