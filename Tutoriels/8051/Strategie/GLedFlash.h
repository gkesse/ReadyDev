//===============================================
#ifndef _GLedFlash_
#define _GLedFlash_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct GLedFlashO GLedFlashO;
//===============================================
struct GLedFlashO {
    void (*Strategy)(GProcessO* obj);
};
//===============================================
GLedFlashO GLedFlash();
//===============================================
#endif
//===============================================