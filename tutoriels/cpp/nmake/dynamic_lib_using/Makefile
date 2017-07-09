BIN = bin
BUILD = build
TARGET = $(BIN)\main.exe

LIBS = \
    /LIBPATH:lib\hello Hello.lib

INCS = \
    /Ilib\hello

OBJS = \
    $(BUILD)\main.obj
    
all: $(OBJS)
	link /OUT:$(TARGET) $(OBJS) $(LIBS)
$(BUILD)\main.obj: main.cpp
	cl /c /EHsc main.cpp /Fo$(BUILD)\main.obj $(INCS)
clean:
	del /Q $(BUILD)\* $(BIN)\*
