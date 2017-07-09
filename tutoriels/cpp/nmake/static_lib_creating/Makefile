BIN = lib
BUILD = build
TARGET = $(BIN)\Hello.lib

INCS = \
    /Imanager
    
OBJS = \
    $(BUILD)\GShow.obj \
    $(BUILD)\GMath.obj
    
all: $(OBJS)
	lib /OUT:$(TARGET) $(OBJS)
$(BUILD)\GShow.obj: manager\GShow.cpp
	cl /c /EHsc manager\GShow.cpp /Fo$(BUILD)\GShow.obj $(INCS)
$(BUILD)\GMath.obj: manager\GMath.cpp
	cl /c /EHsc manager\GMath.cpp /Fo$(BUILD)\GMath.obj $(INCS)
clean:
	del /Q $(BUILD)\* $(BIN)\*
