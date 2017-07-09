BIN = lib
BUILD = build
TARGET = $(BIN)\libHello.a

INCS = \
    -Imanager
    
OBJS = \
    $(BUILD)\GShow.o \
    $(BUILD)\GMath.o
    
all: $(OBJS)
	ar rcs $(TARGET) $(OBJS)
$(BUILD)\GShow.o: manager\GShow.cpp
	g++ -c manager\GShow.cpp -o $(BUILD)\GShow.o $(INCS)
$(BUILD)\GMath.o: manager\GMath.cpp
	g++ -c manager\GMath.cpp -o $(BUILD)\GMath.o $(INCS)
clean:
	rm -f $(BUILD)/* $(BIN)/*
