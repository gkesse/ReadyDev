BIN = bin
BUILD = build
TARGET = $(BIN)/main.exe
DEBUG = no

LIBS = \
    -Llib/hello -lHello
    
INCS = \
    -Imanager \
    -Ilib/hello
        
OBJS = \
    $(patsubst %.cpp, $(BUILD)/%.o, $(wildcard *.cpp)) \
    $(patsubst manager/%.cpp, $(BUILD)/%.o, $(wildcard manager/*.cpp))
    
all: $(OBJS)
ifeq ($(DEBUG),yes)
	@echo "#================================================"    
	@echo "# Generation en mode debug"
	@echo "#================================================"    
else
	@echo "#================================================"    
	@echo "# Generation en mode release"
	@echo "#================================================"    
endif	
	g++ -o $(TARGET) $(OBJS) $(LIBS)
$(BUILD)/%.o: %.cpp
	g++ -c $< -o $@ $(INCS)
$(BUILD)/%.o: manager/%.cpp
	g++ -c $< -o $@ $(INCS)
clean:
	rm -f $(BUILD)/* $(BIN)/*
