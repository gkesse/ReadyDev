//===============================================
#ifndef _GProcessWindow_
#define _GProcessWindow_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessWindowO GProcessWindowO;
//===============================================
struct _GProcessWindowO {
    void (*Strategy)(GProcessO* obj);
};
//===============================================
GProcessWindowO* GProcessWindow();
//===============================================
#endif
//===============================================
