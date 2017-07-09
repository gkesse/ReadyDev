BIN = bin
BUILD = build
TARGET = $(BIN)\main.exe
DEBUG = no

LIBS = \
    /LIBPATH:lib\hello Hello.lib
    
INCS = \
    /Imanager \
    /Ilib\hello
    
OBJS = \
    $(BUILD)\main.obj \
    $(BUILD)\GProcess.obj
    
all: $(OBJS)
!if "$(DEBUG)" == "yes"
	@echo #================================================    
	@echo # Generation en mode debug
	@echo #================================================    
!else
	@echo #================================================    
	@echo # Generation en mode release
	@echo #================================================    
!endif	
	link /OUT:$(TARGET) $** $(LIBS)
.cpp{$(BUILD)}.obj:
	cl /c /EHsc $< /Fo$@ $(INCS)
{manager}.cpp{$(BUILD)}.obj:
	cl /c /EHsc $< /Fo$@ $(INCS)
clean:
	del /Q $(BUILD)\* $(BIN)\*
