BIN = lib
BUILD = build
TARGET = $(BIN)\Hello.dll

INCS = \
    /Imanager
    
OBJS = \
    $(BUILD)\GShow.obj \
    $(BUILD)\GMath.obj
    
all: $(OBJS)
	link /DLL /OUT:$(TARGET) $(OBJS)
$(BUILD)\GShow.obj: manager\GShow.cpp
	cl /c /EHsc /DDLL_APP manager\GShow.cpp /Fo$(BUILD)\GShow.obj $(INCS)
$(BUILD)\GMath.obj: manager\GMath.cpp
	cl /c /EHsc /DDLL_APP manager\GMath.cpp /Fo$(BUILD)\GMath.obj $(INCS)
clean:
	del /Q $(BUILD)\* $(BIN)\*
