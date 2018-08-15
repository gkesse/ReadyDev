//===============================================
#include "GSeos.h"
#include "GLedFlash.h"
//===============================================
void GSeos_Init(uchar ms) {
    uint lPreload = (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000)));
    uchar lPreloadH = (lPreload / 256);
    uchar lPreloadL = (lPreload % 256);
    
    T2CON = 0x00; 
    TH2 = lPreloadH; 
    RCAP2H = lPreloadH; 
    TL2 = lPreloadL; 
    RCAP2L = lPreloadL;
    ET2 = 1;
    TR2 = 1;
}
//===============================================
void GSeos_Start() {
    EA = 1;
}
//===============================================
void GSeos_Go_To_Sleep() {
    PCON |= 0x01;
}
//===============================================
void GSeos_Update() interrupt INTERRUPT_TIMER_T2 {    
    TF2 = 0;
    GLedFlash_Update();
}
//===============================================
