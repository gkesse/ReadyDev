//===============================================
#include "GLedFlash.h"
#include "GPortDef.h"
#include "GTypeDef.h"
//===============================================
static bit gLed_Flash;
static uint gLed_Flash_Time;
//===============================================
void GLedFlash_Init() {
	LED_PORT = LED_PORT_OFF;
	gLed_Flash = LED_OFF;
	gLed_Flash_Time = 0;
}
//===============================================
void GLedFlash_Update() {
	if(++gLed_Flash_Time >= 1000) {
		gLed_Flash_Time = 0;
		if(gLed_Flash == LED_OFF) {
			gLed_Flash = LED_ON;
			LED_PORT = 0xF0;
		}
		else {
			gLed_Flash = LED_OFF;
			LED_PORT = 0x0F;

		}
	}
}
//===============================================
