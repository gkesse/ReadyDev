BIN = bin
BUILD = build
TARGET = $(BIN)\main.exe

INCS = \
    /Imanager
    
OBJS = \
    $(BUILD)\main.obj \
    $(BUILD)\GShow.obj \
    $(BUILD)\GMath.obj
    
all: $(OBJS)
	link /OUT:$(TARGET) $(OBJS)
$(BUILD)\main.obj: main.cpp
	cl /c /EHsc main.cpp /Fo$(BUILD)\main.obj $(INCS)
$(BUILD)\GShow.obj: manager\GShow.cpp
	cl /c /EHsc manager\GShow.cpp /Fo$(BUILD)\GShow.obj $(INCS)
$(BUILD)\GMath.obj: manager\GMath.cpp
	cl /c /EHsc manager\GMath.cpp /Fo$(BUILD)\GMath.obj $(INCS)
clean:
	del /Q $(BUILD)\* $(BIN)\*
