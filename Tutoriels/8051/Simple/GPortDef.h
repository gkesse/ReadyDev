//===============================================
#ifndef _GPortDef_
#define _GPortDef_
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
#define LIGHT P1
sbit LIGHT_RED_L1 = LIGHT^0;
sbit LIGHT_AMBER_L1 = LIGHT^1;
sbit LIGHT_GREEN_L1 = LIGHT^2;
sbit LIGHT_RED_L2 = LIGHT^3;
sbit LIGHT_AMBER_L2 = LIGHT^4;
sbit LIGHT_GREEN_L2 = LIGHT^5;
#define LIGHT_ON (0)
#define LIGHT_OFF (!LIGHT_ON)
#define LIGHT_GREEN_DURATION (3)
#define LIGHT_AMBER_DURATION (2)
#define LIGHT_RED_RED_DURATION (1)
#define LIGHT_RED_DURATION (LIGHT_GREEN_DURATION)
#define LIGHT_RED_AMBER_DURATION (LIGHT_AMBER_DURATION)
#define LIGHT_RED_RED_1_DURATION (LIGHT_RED_RED_DURATION)
#define LIGHT_RED_RED_2_DURATION (LIGHT_RED_RED_DURATION)
//===============================================
#endif
//===============================================
