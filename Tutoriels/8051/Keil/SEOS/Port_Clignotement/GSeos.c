//===============================================
#include "GSeos.h"
#include "GPortFlash.h"
//===============================================
void GSeos_Init(uchar ms) {
    uint m_PRELOAD = (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000)));
    uchar m_PRELOADH = (m_PRELOAD / 256);
    uchar m_PRELOADL = (m_PRELOAD % 256);
    T2CON = 0x00; 
    TH2 = m_PRELOADH; 
    RCAP2H = m_PRELOADH; 
    TL2 = m_PRELOADL; 
    RCAP2L = m_PRELOADL;
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
    GPortFlash_Update();
}
//===============================================
