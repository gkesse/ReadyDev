//===============================================
#include "GPinReadWrite.h"
#include "GPortDef.h"
//===============================================
static uint GPinReadWrite_Time = 0;
static bit GPinReadWrite_Value = 0;
//===============================================
void GPinReadWrite_Init() {
    WRITE_PIN = LED_OFF;
    READ_PIN = 1;
}
//===============================================
void GPinReadWrite_Update() {
    if(++GPinReadWrite_Time >= 20) {
        GPinReadWrite_Time = 0;
        GPinReadWrite_Value = READ_PIN;
        WRITE_PIN = GPinReadWrite_Value;
    }
}
//===============================================
