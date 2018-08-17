//===============================================
#include "GSeos.h"
#include "GLedFlash.h"
//===============================================
static uchar gPreloadH = 0;
static uchar gPreloadL = 0;
//===============================================
void GSeos_Update();
void GSeos_Reload();
//===============================================
void GSeos_Init(uchar ms) {
    uint lPreload = (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000)));
    gPreloadH = (lPreload / 256);
    gPreloadL = (lPreload % 256);
    
    TMOD &= 0xF0;
    TMOD |= 0x01;
    TH0 = gPreloadH;
    TL0 = gPreloadL;
    ET0 = 1;
    TR0 = 1;
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
void GSeos_Update() interrupt INTERRUPT_TIMER_T0 {    
    GSeos_Reload();
    GLedFlash_Update();
}
//===============================================
void GSeos_Reload() {  
    TR0 = 0;
    TH0 = gPreloadH;
    TL0 = gPreloadL;
    TR0 = 1;
}
//===============================================
