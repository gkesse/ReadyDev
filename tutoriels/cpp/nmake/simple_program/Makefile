BIN = bin
BUILD = build
TARGET = $(BIN)\main.exe

OBJS = \
    $(BUILD)\main.obj
    
all: $(OBJS)
	link /OUT:$(TARGET) $(OBJS)
$(BUILD)\main.obj: main.cpp
	cl /c /EHsc main.cpp /Fo$(BUILD)\main.obj
clean:
	del /Q $(BUILD)\* $(BIN)\*
