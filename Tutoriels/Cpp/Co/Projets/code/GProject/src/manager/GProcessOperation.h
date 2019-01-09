//===============================================
#ifndef _GProcessOperation_
#define _GProcessOperation_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct GProcessOperationO GProcessOperationO;
//===============================================
struct GProcessOperationO {
    void (*Strategy)(GProcessO* obj);
};
//===============================================
GProcessOperationO* GProcessOperation();
//===============================================
#endif
//===============================================
