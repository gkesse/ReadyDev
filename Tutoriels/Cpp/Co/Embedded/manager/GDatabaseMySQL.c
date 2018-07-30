//===============================================
#include "GDatabaseMySQL.h"
//===============================================
static GDatabaseMySQLO m_GDatabaseMySQLO;
static int m_GDatabaseMySQL = FALSE;
//===============================================
GDatabaseMySQLO GDatabaseMySQL_Constructor();
void GDatabaseMySQL_Function(GDatabaseMySQLO* obj);
int GDatabaseMySQL_Size(const char* str);
int GDatabaseMySQL_Is_Equal(const char* str1, const char* str2);
//===============================================
GDatabaseMySQLO GDatabaseMySQL_Constructor() {
    GDatabaseMySQLO lObj;
    GDatabaseMySQL_Function(&lObj);
    return lObj;
}
//===============================================
void GDatabaseMySQL_Function(GDatabaseMySQLO* obj) {
    obj->Open = GDatabaseMySQL_Open;
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
void GDatabaseMySQL_Open() {
    printf("Database: MySQL\n");
}
//===============================================
