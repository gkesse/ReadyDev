//===============================================
#include "GDatabaseSQLite.h"
//===============================================
GDatabaseSQLite* GDatabaseSQLite::m_instance = 0;
//===============================================
GDatabaseSQLite::GDatabaseSQLite() {

}
//===============================================
GDatabaseSQLite::~GDatabaseSQLite() {
    
}
//===============================================
GDatabaseSQLite* GDatabaseSQLite::Instance() {
    if(m_instance == 0) {
        m_instance = new GDatabaseSQLite;
    }
    return m_instance;
} 
//===============================================
void GDatabaseSQLite::open() {
    cout << "Ouvrir la base de donnee SQLite\n";
} 
//===============================================
