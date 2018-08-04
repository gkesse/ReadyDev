//===============================================
#ifndef _GDatabaseSQLite_
#define _GDatabaseSQLite_
//===============================================
#include "GDatabase.h"
//===============================================
typedef struct GDatabaseSQLiteO GDatabaseSQLiteO;
//===============================================
struct GDatabaseSQLiteO {
    void (*Strategy)(GDatabaseO* obj);
};
//===============================================
GDatabaseSQLiteO GDatabaseSQLite();
//===============================================
#endif
//===============================================
