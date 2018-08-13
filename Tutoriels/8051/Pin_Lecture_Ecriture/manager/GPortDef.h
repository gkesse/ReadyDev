//===============================================
#ifndef _GPortDef_
#define _GPortDef_
//===============================================
#define READ_PORT P1
#define WRITE_PORT P1
sbit READ_PIN = READ_PORT^0;
sbit WRITE_PIN = WRITE_PORT^7;
#define LED_ON (0)
#define LED_OFF (!LED_ON)
//===============================================
#endif
//===============================================
