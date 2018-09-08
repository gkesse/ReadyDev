GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o \
    $(GBUILD)/GConfig.o \
    $(GBUILD)/GDatabase.o \
    $(GBUILD)/GDatabaseSQLite.o \
    $(GBUILD)/GDatabaseMySQL.o
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o
$(GBUILD)/GConfig.o: $(GSRC)/GConfig.cpp
	g++ -c $(GSRC)/GConfig.cpp -o $(GBUILD)/GConfig.o
$(GBUILD)/GDatabase.o: $(GSRC)/GDatabase.cpp
	g++ -c $(GSRC)/GDatabase.cpp -o $(GBUILD)/GDatabase.o
$(GBUILD)/GDatabaseSQLite.o: $(GSRC)/GDatabaseSQLite.cpp
	g++ -c $(GSRC)/GDatabaseSQLite.cpp -o $(GBUILD)/GDatabaseSQLite.o
$(GBUILD)/GDatabaseMySQL.o: $(GSRC)/GDatabaseMySQL.cpp
	g++ -c $(GSRC)/GDatabaseMySQL.cpp -o $(GBUILD)/GDatabaseMySQL.o
clean:
	del /q $(GBUILD)\* $(GBIN)\*
