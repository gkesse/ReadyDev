//===============================================
#include "GPinReadWrite.h"
#include "GDelay.h"
//===============================================
void main() {
    GPinReadWrite_Init();
    while(1) {
        GPinReadWrite_Update();
        GDelay_ms(10);
    }
}
//===============================================
