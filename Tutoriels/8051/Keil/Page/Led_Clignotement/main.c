//===============================================
#include "GInclude.h"
#include "GPortDef.h"
//===============================================
#define TIME_MS 110
//===============================================
static bit gLedFlash_State = FALSE;
static uint gLedFlash_Time = 0;
//===============================================
void GLedFlash_Init();
void GLedFlash_Update();
void GDelay_ms(uint ms);
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
void GDelay_ms(uint ms) {
	uint i, j;
    for(i = 0; i < ms; i++) {
        for(j = 0; j < TIME_MS; j++);
	}
}
//===============================================
void main() {
	GLedFlash_Init();
	while(1) { 
		GLedFlash_Update();
		GDelay_ms(1);
	}		
}
//===============================================