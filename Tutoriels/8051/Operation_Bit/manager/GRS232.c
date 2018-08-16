//===============================================
#include "GRS232.h"
//===============================================
const char code HEXA_MAP[] = {
    '0','1','2','3','4','5','6','7',
    '8','9','A','B','C','D','E','F'
};
//===============================================
void GRS232_Write_Char(char aChar);
uchar GRS232_Get_Length(const char* aString);
uchar GRS232_Get_Digits_Hexa(uint aInt);
uchar GRS232_Get_Digits_Int(uint aInt);
uchar GRS232_Get_Digits_Bin(uint aInt);
ulong GRS232_Get_Pow(uchar aInt, uchar aPow);
//===============================================
void GRS232_Init() {
    TMOD = 0x20;
    SCON = 0x50;
    TH1 = 0xFD;
    ES = 0;
    TR1 = 1;
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
void GRS232_Write_String_Space(const char* aString, uchar aSpace, char aChar) {
	uchar lLength = GRS232_Get_Length(aString);
    uchar i = 0;
    char lData;
    if(aSpace < lLength) aSpace = lLength;
    while(1) {
        if(i > aSpace) break;
        lData = aString[i];
        if(i > lLength) lData = aChar;
        GRS232_Write_Char(lData);
        i++;
    }
    GRS232_Write_Char(' ');
}
//===============================================
void GRS232_Write_Hexa(uint aInt, uchar aMax) {
    uint lData = aInt;
    uint lData2;
    uchar lDigits = GRS232_Get_Digits_Hexa(aInt);
    uchar i;
    
    GRS232_Write_String("0x");
    
    if(aMax == 0 || aMax < lDigits) aMax = lDigits;
    i = aMax;
    while(1) {
        i--;
        lData2 = lData / GRS232_Get_Pow(16, i);
        lData = lData % GRS232_Get_Pow(16, i);
        GRS232_Write_Char(HEXA_MAP[lData2]);
        if(i == 0) break;
    }
}
//===============================================
void GRS232_Write_Bin(uint aInt, uchar aMax) {
    uint lData = aInt;
    uchar lData2;
    uchar lDigits = GRS232_Get_Digits_Bin(aInt);
    uchar i;
    
    GRS232_Write_String("b");
    
    if(aMax == 0 || aMax < lDigits) aMax = lDigits;
    i = aMax;
    while(1) {
        i--;
        lData2 = lData / GRS232_Get_Pow(2, i);
        lData = lData % GRS232_Get_Pow(2, i);
        GRS232_Write_Char(HEXA_MAP[lData2]);
        if(i == 0) break;
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
uchar GRS232_Get_Length(const char* aString) {
    uchar i = 0;
    while(1) {
        if(aString[i] == 0) break;
        i++;
    }
    return i;
}
//===============================================
uchar GRS232_Get_Digits_Hexa(uint aInt) {
	uchar lDigits = 0;
    while(1) {
        aInt = aInt / 16;
        lDigits++;
        if(aInt == 0) break;
    }
	return lDigits;
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
uchar GRS232_Get_Digits_Bin(uint aInt) {
	uchar lDigits = 0;
    while(1) {
        aInt = aInt / 2;
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
