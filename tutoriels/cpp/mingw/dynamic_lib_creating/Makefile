BIN = lib
BUILD = build
TARGET = $(BIN)\libHello.dll

INCS = \
    -Imanager
    
OBJS = \
    $(BUILD)\GShow.o \
    $(BUILD)\GMath.o
    
all: $(OBJS)
	g++ -shared -o $(TARGET) $(OBJS)
$(BUILD)\GShow.o: manager\GShow.cpp
	g++ -c -DDLL_APP manager\GShow.cpp -o $(BUILD)\GShow.o $(INCS)
$(BUILD)\GMath.o: manager\GMath.cpp
	g++ -c -DDLL_APP manager\GMath.cpp -o $(BUILD)\GMath.o $(INCS)
clean:
	del $(OBJS) $(TARGET)
