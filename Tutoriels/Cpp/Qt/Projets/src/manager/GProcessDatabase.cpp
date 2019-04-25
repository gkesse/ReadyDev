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
}
//===============================================
