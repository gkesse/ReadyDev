//===============================================
#ifndef _GProcessWindow_
#define _GProcessWindow_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct GProcessWindowO GProcessWindowO;
//===============================================
struct GProcessWindowO {
    void (*Strategy)(GProcessO* obj);
};
//===============================================
GProcessWindowO* GProcessWindow();
//===============================================
#endif
//===============================================
