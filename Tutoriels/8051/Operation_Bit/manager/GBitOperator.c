//===============================================
#include "GBitOperator.h"
#include "GPortDef.h"
//===============================================
static uint GBitOperator_Time = 0;
static bit GBitOperator_Value = 0;
//===============================================
void GBitOperator_Init() {
    WRITE_PIN = LED_OFF;
    READ_PIN = 1;
}
//===============================================
void GBitOperator_Update() {
    if(++GBitOperator_Time >= 20) {
        GBitOperator_Time = 0;
        GBitOperator_Value = READ_PIN;
        WRITE_PIN = GBitOperator_Value;
    }
}
//===============================================
