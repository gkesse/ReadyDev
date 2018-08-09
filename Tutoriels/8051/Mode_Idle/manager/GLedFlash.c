//===============================================
#include "GLedFlash.h"
#include "GPortDef.h"
#include "GDelay.h"
//===============================================
static bit gLedFlash_State = FALSE;
static uint gLedFlash_Time = 0;
//===============================================
void GLedFlash_Init() {
    LED_PIN = LED_OFF;
}
//===============================================
void GLedFlash_Update() {
    gLedFlash_Time = 0;
    while(1) {
        if(gLedFlash_State == FALSE) {
            gLedFlash_State = TRUE;
            LED_PIN = LED_ON;
        }
        else {
            gLedFlash_State = FALSE;
            LED_PIN = LED_OFF;
        }
        GDelay_ms(200);
        if(++gLedFlash_Time >= 5) break;
        gLedFlash_State = FALSE;
				LED_PIN = LED_OFF;
    }
    GDelay_ms(1000);
}
//===============================================
