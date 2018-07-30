//===============================================
#ifndef _GDatabase_
#define _GDatabase_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GDatabaseO GDatabaseO;
typedef struct GDatabaseI GDatabaseI;
//===============================================
typedef void (*pGDatabase_Open)();
//===============================================
struct GDatabaseI {
    pGDatabase_Open Open;
};
//===============================================
struct GDatabaseO {
    GDatabaseI I;
    void (*Strategy)(const char* strategy);
    void (*Open)();
};
//===============================================
GDatabaseO GDatabase();
//===============================================
#endif
//===============================================
