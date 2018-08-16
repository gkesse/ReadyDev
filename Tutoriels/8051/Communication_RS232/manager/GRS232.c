//===============================================
#include "GRS232.h"
//===============================================
#define TRANS_BUFFER_LENGTH 20
//===============================================
const char code HEXA_MAP[] = {
    '0','1','2','3','4','5','6','7',
    '8','9','A','B','C','D','E','F'
};
//===============================================
static uchar gTrans_Buffer[TRANS_BUFFER_LENGTH];
static uchar gTrans_Buffer_Index = 0;
static uchar gTrans_Write_Index = 0;
//===============================================
void GRS232_Write_Char(char aChar);
void GRS232_Send_Char(char aChar);
uchar GRS232_Get_Digits_Int(uint aInt);
ulong GRS232_Get_Pow(uchar aInt, uchar aPow);
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
void GRS232_Write_String(const char* aString) {
    uchar i = 0;
    while(1) {
        if(aString[i] == 0) break;
        GRS232_Write_Char(aString[i]);
        i++;
    }
}
//===============================================
void GRS232_Write_Int(uint aInt, uchar aMax) {
    uint lData = aInt;
    uint lData2;
    uchar lDigits = GRS232_Get_Digits_Int(aInt);
    uchar i;
        
    if(aMax == 0 || aMax < lDigits) aMax = lDigits;
    i = aMax;
    while(1) {
        i--;
        lData2 = lData / GRS232_Get_Pow(10, i);
        lData = lData % GRS232_Get_Pow(10, i);
        GRS232_Write_Char(HEXA_MAP[lData2]);
        if(i == 0) break;
    }
}
//===============================================
void GRS232_Write_Char(char aChar) {
    if(gTrans_Buffer_Index < TRANS_BUFFER_LENGTH) {
        gTrans_Buffer[gTrans_Buffer_Index] = aChar;
        gTrans_Buffer_Index++;
    }
}
//===============================================
void GRS232_Send_Char(char aChar) {
    char lData = aChar;
	if(lData == '\a') lData = 0x07;      //Alert
	else if(lData == '\b') lData = 0x08; //Backspace
	else if(lData == '\t') lData = 0x09; //Horizontal Tab
	else if(lData == '\r') lData = 0x0A; //Newline
	else if(lData == '\v') lData = 0x0B; //Vertical Tab
	else if(lData == '\f') lData = 0x0C; //Formfeed
	else if(lData == '\n') lData = 0x0D; //Carriage Return
	SBUF = lData;		
	while(TI == 0);		
	TI = 0;			
}
//===============================================
uchar GRS232_Get_Digits_Int(uint aInt) {
	uchar lDigits = 0;
    while(1) {
        aInt = aInt / 10;
        lDigits++;
        if(aInt == 0) break;
    }
	return lDigits;
}
//===============================================
ulong GRS232_Get_Pow(uchar aInt, uchar aPow) {
    uchar i = 0;
    ulong lData = 1;
    if(aPow == 0) return 1;
    while(1) {
        lData *= aInt;
        i++;
        if(i == aPow) break;
    }
    return lData;
}
//===============================================
