//===============================================
#include "GPortFlash.h"
#include "GPortDef.h"
//===============================================
static bit GPortFlash_State = FALSE;
//===============================================
void GPortFlash_Init() {
    LED_PORT = LED_PORT_OFF;
}
//===============================================
void GPortFlash_Update() {
    if(GPortFlash_State == FALSE) {
        GPortFlash_State = TRUE;
        LED_PORT = 0x0F;
    }
    else {
        GPortFlash_State = FALSE;
        LED_PORT = 0xF0;
    }
}
//===============================================
