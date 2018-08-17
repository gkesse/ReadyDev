//===============================================
#include "GDelay.h"
//===============================================
#define DELAY_MS (110)
//===============================================
void GDelay_ms(uint ms) {
    uint lDelay;
    uint lDelay_ms;
    for(lDelay = 0; lDelay < ms; lDelay++) {
        for(lDelay_ms = 0; lDelay_ms < DELAY_MS; lDelay_ms++);
    }
}
//===============================================
