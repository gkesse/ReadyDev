//===============================================
#include "GFlashLed.h"
#include "GPortDef.h"
#include "GTypeDef.h"
//===============================================
static bit gFlashLed_State = 0;
static uint gFlashLed_Time = 0;
//===============================================
void GFlashLed_Init() {
	LED0 = LED_OFF;
}
//===============================================
void GFlashLed_Update() {
	if(++gFlashLed_Time >= 0) {
		if(gFlashLed_State == 0) {
			gFlashLed_State = 1;
			LED0 = LED_ON;
		}
		else {
			gFlashLed_State = 0;
			LED0 = LED_OFF;
		}
	}
}
//===============================================
