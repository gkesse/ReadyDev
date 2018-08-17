//===============================================
#include "GInterruptEx0.h"
#include "GDelay.h"
//===============================================
void GInterruptEx0_Init() {
    IT0 = 1;
    EX0 = 1;
    EA = 1;
}
//===============================================
void GInterruptEx0_Update() interrupt INTERRUPT_EXTERNAL_0 {
    GDelay_ms(200);
}
//===============================================
