//===============================================
#ifndef _GDatabaseMySQL_
#define _GDatabaseMySQL_
//===============================================
#include "GDatabase.h"
//===============================================
typedef struct GDatabaseMySQLO GDatabaseMySQLO;
//===============================================
struct GDatabaseMySQLO {
    void (*Strategy)(GDatabaseO* obj);
};
//===============================================
GDatabaseMySQLO GDatabaseMySQL();
//===============================================
#endif
//===============================================
