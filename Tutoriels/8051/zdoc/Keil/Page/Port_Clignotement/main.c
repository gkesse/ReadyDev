//===============================================
#include "GInclude.h"
#include "GPortDef.h"
//===============================================
#define TIME_MS 110
//===============================================
static bit GPortFlash_State = FALSE;
static uint GPortFlash_Time = 0;
//===============================================
void GPortFlash_Init();
void GPortFlash_Update();
void GDelay_ms(uint ms);
//===============================================
void GPortFlash_Init() {
    LED_PORT = LED_PORT_OFF;
}
//===============================================
void GPortFlash_Update() {
    if(++GPortFlash_Time >= 1000) {
        GPortFlash_Time = 0;
        if(GPortFlash_State == FALSE) {
            GPortFlash_State = TRUE;
            LED_PORT = 0x0F;
        }
        else {
            GPortFlash_State = FALSE;
            LED_PORT = 0xF0;
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
	GPortFlash_Init();
	while(1) { 
		GPortFlash_Update();
		GDelay_ms(1);
	}		
}
//===============================================