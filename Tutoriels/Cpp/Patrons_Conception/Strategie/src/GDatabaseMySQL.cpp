//===============================================
#include "GDatabaseMySQL.h"
//===============================================
GDatabaseMySQL* GDatabaseMySQL::m_instance = 0;
//===============================================
GDatabaseMySQL::GDatabaseMySQL() {

}
//===============================================
GDatabaseMySQL::~GDatabaseMySQL() {
    
}
//===============================================
GDatabaseMySQL* GDatabaseMySQL::Instance() {
    if(m_instance == 0) {
        m_instance = new GDatabaseMySQL;
    }
    return m_instance;
} 
//===============================================
void GDatabaseMySQL::open() {
    cout << "Ouvrir la base de donnee MySQL\n";
} 
//===============================================
