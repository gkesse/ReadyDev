//===============================================
#include "GDatabaseSqlite.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GDatabaseSqlite* GDatabaseSqlite::m_instance = 0;
//===============================================
GDatabaseSqlite::GDatabaseSqlite() {

}
//===============================================
GDatabaseSqlite::~GDatabaseSqlite() {

}
//===============================================
GDatabaseSqlite* GDatabaseSqlite::Instance() {
    if(m_instance == 0) {
        m_instance = new GDatabaseSqlite;
    }
    return m_instance;
}
//===============================================
