//===============================================
#include "GLedFlash.h"
#include "GPortDef.h"
//===============================================
static bit gLedFlash_State = FALSE;
static uint gLedFlash_Time = 0;
//===============================================
void GLedFlash_Init() {
    LED0 = LED_OFF;
}
//===============================================
void GLedFlash_Update() {
    if(++gLedFlash_Time >= 1000) {
        gLedFlash_Time = 0;
        if(gLedFlash_State == FALSE) {
            gLedFlash_State = TRUE;
            LED0 = LED_ON;
        }
        else {
            gLedFlash_State = FALSE;
            LED0 = LED_OFF;
        }
    }
}
//===============================================
