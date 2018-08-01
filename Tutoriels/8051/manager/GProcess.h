//===============================================
#ifndef _GProcess_
#define _GProcess_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GProcessO GProcessO;
typedef struct GProcessI GProcessI;
//===============================================
typedef void (*pGProcess_Open)();
//===============================================
struct GProcessI {
    void (*Init)();
    void (*Update)();
};
//===============================================
struct GProcessO {
    GProcessI I;
    void (*Strategy)(int strategy);
    void (*Init)();
    void (*Update)();
};
//===============================================
GProcessO GProcess();
//===============================================
#endif
//===============================================
