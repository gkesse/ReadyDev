//===============================================
#include "GLedFlash.h"
#include "GModeIdle.h"
#include "GInterruptEx0.h"
//===============================================
void main() {
    GLedFlash_Init();
    GInterruptEx0_Init();
    while(1) {
        GLedFlash_Update();
        GModeIdle_Start();
    }
}
//===============================================
