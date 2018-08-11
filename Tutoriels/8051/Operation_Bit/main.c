//===============================================
#include "GBitOperator.h"
#include "GDelay.h"
//===============================================
void main() {
    GBitOperator_Init();
    while(1) {
        GBitOperator_Update();
        GDelay_ms(10);
    }
}
//===============================================
