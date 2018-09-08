//===============================================
#ifndef _GDatabaseMySQL_
#define _GDatabaseMySQL_
//===============================================
#include "GDatabase.h"
//===============================================
class GDatabaseMySQL : public GDatabase {
public:
    GDatabaseMySQL();
    ~GDatabaseMySQL();
    
public:
    static GDatabaseMySQL* Instance();
    void open();
    
private:
    static GDatabaseMySQL* m_instance;
};
//===============================================
#endif
//===============================================
