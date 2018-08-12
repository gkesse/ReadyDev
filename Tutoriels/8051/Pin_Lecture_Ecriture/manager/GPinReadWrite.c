//===============================================
#include "GPinReadWrite.h"
#include "GPortDef.h"
//===============================================
static uint gPinReadWrite_Time = 0;
static bit gPinReadWrite_Value = 0;
//===============================================
void GPinReadWrite_Init() {
    WRITE_PIN = LED_OFF;
    READ_PIN = 1;
}
//===============================================
void GPinReadWrite_Update() {
    if(++gPinReadWrite_Time >= 20) {
        gPinReadWrite_Time = 0;
        gPinReadWrite_Value = READ_PIN;
        WRITE_PIN = gPinReadWrite_Value;
    }
}
//===============================================
