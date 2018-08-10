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
    if(++gLedFlash_Time >= 10) {
        gLedFlash_Time = 0;
        if(gLedFlash_State == FALSE) {
            gLedFlash_State = TRUE;
            LED_PIN = LED_ON;
        }
        else {
            gLedFlash_State = FALSE;
            LED_PIN = LED_OFF;
        }
    }
}
//===============================================
