//===============================================
#include "GDatabase.h"
#include "GDatabaseMySQL.h"
#include "GDatabaseSQLite.h"
#include "GString.h"
//===============================================
static GDatabaseO m_GDatabaseO;
static int m_GDatabase = FALSE;
//===============================================
GDatabaseO GDatabase_Constructor();
void GDatabase_Function(GDatabaseO* obj);
void GDatabase_Strategy(const char* strategy);
void GDatabase_Open();
//===============================================
GDatabaseO GDatabase_Constructor() {
    GDatabaseO lObj;
    GDatabase_Function(&lObj);
    return lObj;
}
//===============================================
void GDatabase_Function(GDatabaseO* obj) {
    obj->Strategy = GDatabase_Strategy;
    obj->Open = GDatabase_Open;
}
//===============================================
GDatabaseO GDatabase() {
    if(m_GDatabase == FALSE) {
        m_GDatabaseO = GDatabase_Constructor();
        GDatabase_Strategy("DEFAULT");
        m_GDatabase = TRUE;
    }
    return m_GDatabaseO;
}
//===============================================
void GDatabase_Strategy(const char* strategy) {
    if(GString().Is_Equal(strategy, "MySQL")) {GDatabaseMySQL().Strategy(&m_GDatabaseO);}
    else if(GString().Is_Equal(strategy, "SQLite")) {GDatabaseSQLite().Strategy(&m_GDatabaseO);}
    else {GDatabaseMySQL().Strategy(&m_GDatabaseO);}
}
//===============================================
void GDatabase_Open() {
    m_GDatabaseO.I.Open();
}
//===============================================
