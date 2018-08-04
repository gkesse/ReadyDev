//===============================================
#ifndef _GPortDef_
#define _GPortDef_
//===============================================
#include "GInclude.h"
//===============================================
#define LED_PORT P1
sbit LED0 = LED_PORT^0;
sbit LED1 = LED_PORT^1;
sbit LED2 = LED_PORT^2;
sbit LED3 = LED_PORT^3;
sbit LED4 = LED_PORT^4;
sbit LED5 = LED_PORT^5;
sbit LED6 = LED_PORT^6;
sbit LED7 = LED_PORT^7;
#define LED_ON (0)
#define LED_OFF (!LED_ON)
#define LED_PORT_ON (0x00)
#define LED_PORT_OFF (~LED_PORT_ON)
//===============================================
#endif
//===============================================
