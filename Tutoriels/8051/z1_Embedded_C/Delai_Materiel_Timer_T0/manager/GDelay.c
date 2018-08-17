//===============================================
#include "GDelay.h"
//===============================================
#define PRELOAD (65536 - ((OSC_FREQ * 1) / (OSC_PER_INST * 1000)))
#define PRELOADH (PRELOAD / 256)
#define PRELOADL (PRELOAD % 256)
//===============================================
void GDelay_ms(uint ms) {
    uint lDelay;
    
    TMOD &= 0xF0;
    TMOD |= 0x01;
    ET0 = 0; 

    for(lDelay = 0; lDelay < ms; lDelay++) {
        TH0 = PRELOADH;
        TL0 = PRELOADL;
        TF0 = 0;
        TR0 = 1;
        while (TF0 == 0);
        TR0 = 0;
    }
}
//===============================================
