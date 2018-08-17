//===============================================
#include "GInterruptT2.h"
#include "GLedFlash.h"
//===============================================
void main() {
    GLedFlash_Init();
    GInterruptT2_Init(1);
    GInterruptT2_Start();
    while(1);
}
//===============================================
