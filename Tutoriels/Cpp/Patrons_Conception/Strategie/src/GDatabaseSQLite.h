//===============================================
#ifndef _GDatabaseSQLite_
#define _GDatabaseSQLite_
//===============================================
#include "GDatabase.h"
//===============================================
class GDatabaseSQLite : public GDatabase {
public:
    GDatabaseSQLite();
    ~GDatabaseSQLite();
    
public:
    static GDatabaseSQLite* Instance();
    void open();
    
private:
    static GDatabaseSQLite* m_instance;
};
//===============================================
#endif
//===============================================
