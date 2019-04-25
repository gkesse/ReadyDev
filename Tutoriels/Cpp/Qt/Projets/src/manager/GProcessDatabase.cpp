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
    GDatabase::Instance()->exec("SQLITE",
                "create table books("
                "id integer primary key,"
                "title varchar,"
                "author integer,"
                "genre integer,"
                "year integer,"
                "rating integer"
                ")");
}
//===============================================
