//===============================================
#include "GDatabaseSQLite.h"
//===============================================
static GDatabaseSQLiteO m_GDatabaseSQLiteO;
static int m_GDatabaseSQLite = FALSE;
//===============================================
GDatabaseSQLiteO GDatabaseSQLite_Constructor();
void GDatabaseSQLite_Function(GDatabaseSQLiteO* obj);
void GDatabaseSQLite_Strategy(GDatabaseO* obj);
void GDatabaseSQLite_Open();
//===============================================
GDatabaseSQLiteO GDatabaseSQLite_Constructor() {
    GDatabaseSQLiteO lObj;
    GDatabaseSQLite_Function(&lObj);
    return lObj;
}
//===============================================
void GDatabaseSQLite_Function(GDatabaseSQLiteO* obj) {
    obj->Strategy = GDatabaseSQLite_Strategy;
}
//===============================================
GDatabaseSQLiteO GDatabaseSQLite() {
    if(m_GDatabaseSQLite == FALSE) {
        m_GDatabaseSQLiteO = GDatabaseSQLite_Constructor();
        m_GDatabaseSQLite = TRUE;
    }
    return m_GDatabaseSQLiteO;
}
//===============================================
void GDatabaseSQLite_Strategy(GDatabaseO* obj) {
    obj->Open = GDatabaseSQLite_Open;
}
//===============================================
void GDatabaseSQLite_Open() {
    printf("Database: Ouverture Connexion SQLite\n");
}
//===============================================
