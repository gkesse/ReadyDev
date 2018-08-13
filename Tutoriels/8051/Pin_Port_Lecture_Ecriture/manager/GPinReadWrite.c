//===============================================
#include "GPinReadWrite.h"
#include "GPortDef.h"
//===============================================
static uint gPinReadWrite_Time = 0;
static bit gPinReadWrite_Value = 0;
//===============================================
void GPinReadWrite_Write_Bit(uchar pin, bit d);
bit GPinReadWrite_Read_Bit(uchar pin);
//===============================================
void GPinReadWrite_Write_Bit(uchar pin, bit d) {
    uchar lWrite = 0x01;
    lWrite <<= pin;
    if(d == 1) {
        RW_PORT |= lWrite;
    }
    else {
        RW_PORT &= (~lWrite);
    }
}
//===============================================
bit GPinReadWrite_Read_Bit(uchar pin) {
    uchar lRead = 0x01;
    lRead <<= pin;
    GPinReadWrite_Write_Bit(pin, 1);
    if(lRead & RW_PORT) return 1;
    return 0;
}
//===============================================
void GPinReadWrite_Init() {
    GPinReadWrite_Write_Bit(7, 1);
}
//===============================================
void GPinReadWrite_Update() {
    if(++gPinReadWrite_Time >= 20) {
        gPinReadWrite_Time = 0;
        gPinReadWrite_Value = GPinReadWrite_Read_Bit(0);
        GPinReadWrite_Write_Bit(7, gPinReadWrite_Value);
    }
}
//===============================================
