//===============================================
#include "GDatabaseMySQL.h"
//===============================================
static GDatabaseMySQLO m_GDatabaseMySQLO;
static int m_GDatabaseMySQL = FALSE;
//===============================================
GDatabaseMySQLO GDatabaseMySQL_Constructor();
void GDatabaseMySQL_Function(GDatabaseMySQLO* obj);
void GDatabaseMySQL_Strategy(GDatabaseO* obj);
void GDatabaseMySQL_Open();
//===============================================
GDatabaseMySQLO GDatabaseMySQL_Constructor() {
    GDatabaseMySQLO lObj;
    GDatabaseMySQL_Function(&lObj);
    return lObj;
}
//===============================================
void GDatabaseMySQL_Function(GDatabaseMySQLO* obj) {
    obj->Strategy = GDatabaseMySQL_Strategy;
}
//===============================================
GDatabaseMySQLO GDatabaseMySQL() {
    if(m_GDatabaseMySQL == FALSE) {
        m_GDatabaseMySQLO = GDatabaseMySQL_Constructor();
        m_GDatabaseMySQL = TRUE;
    }
    return m_GDatabaseMySQLO;
}
//===============================================
void GDatabaseMySQL_Strategy(GDatabaseO* obj) {
    obj->Open = GDatabaseMySQL_Open;
}
//===============================================
void GDatabaseMySQL_Open() {
    printf("Database: Ouverture Connexion MySQL\n");
}
//===============================================
