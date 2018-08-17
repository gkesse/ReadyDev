//===============================================
#ifndef _GPortDef_
#define _GPortDef_
//===============================================
#define INPUT_PORT P1
#define OUTPUT_PORT P2
sbit SWITCH_PIN = INPUT_PORT^0;
#define SWITCH_PRESSED (1)
#define SWITCH_RELEASED (!SWITCH_PRESSED)
#define OUTPUT_PRESSED (0x0F)
#define OUTPUT_RELEASED (~OUTPUT_PRESSED)
//===============================================
#endif
//===============================================
