//===============================================
#ifndef _GProcessLedFlash_
#define _GProcessLedFlash_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct GProcessLedFlashO GProcessLedFlashO;
//===============================================
struct GProcessLedFlashO {
    void (*Strategy)(GProcessO* obj);
};
//===============================================
GProcessLedFlashO GProcessLedFlash();
//===============================================
#endif
//===============================================
