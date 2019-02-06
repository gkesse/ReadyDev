//===============================================
#ifndef _GProcessConsole_
#define _GProcessConsole_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct GProcessConsoleO GProcessConsoleO;
//===============================================
struct GProcessConsoleO {
    void (*Strategy)(GProcessO* obj);
};
//===============================================
GProcessConsoleO* GProcessConsole();
//===============================================
#endif
//===============================================
