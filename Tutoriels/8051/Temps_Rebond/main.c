//===============================================
#include "GDebounce.h"
#include "GDelay.h"
//===============================================
void main() {
    GDebounce_Init();
    while(1) {
        GDebounce_Update();
        GDelay_ms(10);
    }
}
//===============================================
