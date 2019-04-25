//===============================================
#include "GProcessDatabase.h"
#include "GDatabase.h"
//===============================================
GProcessDatabase* GProcessDatabase::m_instance = 0;
//===============================================
GProcessDatabase::GProcessDatabase() {

}
//===============================================
GProcessDatabase::~GProcessDatabase() {

}
//===============================================
GProcessDatabase* GProcessDatabase::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDatabase;
    }
    return m_instance;
}
//===============================================
void GProcessDatabase::run(int argc, char **argv) {
    GDatabase::Instance()->showDrivers();
    GDatabase::Instance()->addDatabase("SQLITE", "QSQLITE");
    GDatabase::Instance()->setDatabaseName("SQLITE", "data/db/data.dat");
    GDatabase::Instance()->open("SQLITE");
    GDatabase::Instance()->showTables("SQLITE");
    GDatabase::Instance()->createTable(
                "SQLITE", "books",
                "id integer primary key,"
                "title varchar,"
                "author integer,"
                "genre integer,"
                "year integer,"
                "rating integer");
    GDatabase::Instance()->createTable(
                "SQLITE", "authors",
                "id integer primary key,"
                "name varchar,"
                "birthdate date");
    GDatabase::Instance()->createTable(
                "SQLITE", "genres",
                "id integer primary key,"
                "name varchar");
    GDatabase::Instance()->close("SQLITE");
}
//===============================================
