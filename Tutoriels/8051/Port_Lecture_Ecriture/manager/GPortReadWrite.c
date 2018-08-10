//===============================================
#include "GPortReadWrite.h"
#include "GPortDef.h"
//===============================================
static uint gPortReadWrite_Time = 0;
static uchar gPortReadWrite_Value = 0;
//===============================================
void GPortReadWrite_Init() {
    WRITE_PORT = PORT_OFF;
    READ_PORT = 0xFF;
}
//===============================================
void GPortReadWrite_Update() {
    if(++gPortReadWrite_Time >= 20) {
        gPortReadWrite_Time = 0;
        gPortReadWrite_Value = READ_PORT;
        WRITE_PORT = gPortReadWrite_Value;
    }
}
//===============================================
