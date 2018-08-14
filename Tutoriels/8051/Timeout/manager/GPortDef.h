//===============================================
#ifndef _GPortDef_
#define _GPortDef_
//===============================================
#define INPUT_PORT P1
#define COUNTER_PORT P2
#define TIMEOUT_PORT P1
sbit SWITCH_PIN = INPUT_PORT^0;
sbit TIMEOUT_PIN = TIMEOUT_PORT^7;
#define SWITCH_PRESSED (1)
#define SWITCH_RELEASED (!SWITCH_PRESSED)
#define COUNTER_OFF (0xFF)
//===============================================
#endif
//===============================================
