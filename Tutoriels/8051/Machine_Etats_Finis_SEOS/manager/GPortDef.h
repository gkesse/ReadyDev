//===============================================
#ifndef _GPortDef_
#define _GPortDef_
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
