//===============================================
#include "GRS232.h"
//===============================================
#define TRANS_BUFFER_LENGTH 20
//===============================================
static uchar gTrans_Buffer[TRANS_BUFFER_LENGTH];
static uchar gTrans_Buffer_Index = 0;
static uchar gTrans_Write_Index = 0;
//===============================================
void GRS232_Init(uint aBaudRate) {
    uchar lPreload = (256 - (uchar)((((ulong)OSC_FREQ / 100) * 3125)
    / ((ulong)aBaudRate * OSC_PER_INST * 1000)));

    TMOD |= 0x20;
    SCON = 0x50;
    TH1 = lPreload;
    TL1 = lPreload;
    ES = 0;
    TR1 = 1;
}
//===============================================
void GRS232_Write_Char_To_Buffer(char aChar) {
    if(gTrans_Buffer_Index < TRANS_BUFFER_LENGTH) {
        gTrans_Buffer[gTrans_Buffer_Index] = aChar;
        gTrans_Buffer_Index++;
    }
}
//===============================================
void GRS232_Write_String_To_Buffer(const char* aString) {
    uchar i = 0;
    while(1) {
        if(aString[i] == 0) break;
        GRS232_Write_Char_To_Buffer(aString[i]);
        i++;
    }
}
//===============================================
void GRS232_Send_Char(char aChar) {
	if(aChar == '\n') aChar = 0x0D;
	SBUF = aChar;		
	while(TI == 0);		
	TI = 0;			
}
//===============================================
void GRS232_Update() {
    if(gTrans_Write_Index < gTrans_Buffer_Index) {
        GRS232_Send_Char(gTrans_Buffer[gTrans_Write_Index]);
        gTrans_Write_Index++;
    }
    else {
        gTrans_Write_Index = 0;
        gTrans_Buffer_Index = 0;
    }
}
//===============================================
