//===============================================
#include "GPortReadWrite.h"
#include "GDelay.h"
//===============================================
void main() {
    GPortReadWrite_Init();
    while(1) {
        GPortReadWrite_Update();
        GDelay_ms(10);
    }
}
//===============================================
