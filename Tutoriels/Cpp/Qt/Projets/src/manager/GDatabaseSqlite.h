//===============================================
#ifndef _GDatabaseSqlite_
#define _GDatabaseSqlite_
//===============================================
#include "GDatabase.h"
//===============================================
class GDatabaseSqlite : public GDatabase {
public:
    GDatabaseSqlite();
    ~GDatabaseSqlite();

public:
    static GDatabaseSqlite* Instance();

private:
    static GDatabaseSqlite* m_instance;
};
//===============================================
#endif
//===============================================
