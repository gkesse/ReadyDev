//===============================================
#include "GRS232.h"
//===============================================
const char code HEXA_MAP[] = {
    '0','1','2','3','4','5','6','7',
    '8','9','A','B','C','D','E','F'
};
//===============================================
void GRS232_Write_Char(char c);
uchar GRS232_Get_Length(const char* d);
uchar GRS232_Get_Digits_Hexa(uint d);
uchar GRS232_Get_Digits_Int(uint d);
uchar GRS232_Get_Digits_Bin(uint d);
ulong GRS232_Get_Pow(uchar d, uchar p);
//===============================================
void GRS232_Init() {
    TMOD = 0x20;
    SCON = 0x50;
    TH1 = 0xFD;
    ES = 0;
    TR1 = 1;
}
//===============================================
void GRS232_Write_String(const char* d) {
    uchar i = 0;
    while(d[i] != 0) {
        GRS232_Write_Char(d[i++]);
    }
}
//===============================================
void GRS232_Write_String_Space(const char* d, uchar space, char c) {
	uchar lLength = GRS232_Get_Length(d);
    uchar i = 0;
    char lData;
    if(space < lLength) space = lLength;
    while(1) {
        if(i > space) break;
        lData = d[i];
        if(i > lLength) lData = c;
        GRS232_Write_Char(lData);
        i++;
    }
    GRS232_Write_Char(' ');
}
//===============================================
void GRS232_Write_Hexa(uint d, uchar MAX) {
    uint lData = d;
    uint lData2;
    uchar lDigits = GRS232_Get_Digits_Hexa(d);
    uchar i;
    
    GRS232_Write_String("0x");
    
    if(MAX == 0 || MAX < lDigits) MAX = lDigits;
    i = MAX;
    while(1) {
        i--;
        lData2 = lData / GRS232_Get_Pow(16, i);
        lData = lData % GRS232_Get_Pow(16, i);
        GRS232_Write_Char(HEXA_MAP[lData2]);
        if(i == 0) break;
    }
}
//===============================================
void GRS232_Write_Bin(uint d, uchar MAX) {
    uint lData = d;
    uchar lData2;
    uchar lDigits = GRS232_Get_Digits_Bin(d);
    uchar i;
    
    GRS232_Write_String("b");
    
    if(MAX == 0 || MAX < lDigits) MAX = lDigits;
    i = MAX;
    while(1) {
        i--;
        lData2 = lData / GRS232_Get_Pow(2, i);
        lData = lData % GRS232_Get_Pow(2, i);
        GRS232_Write_Char(HEXA_MAP[lData2]);
        if(i == 0) break;
    }
}
//===============================================
void GRS232_Write_Int(uint d, uchar MAX) {
    uint lData = d;
    uint lData2;
    uchar lDigits = GRS232_Get_Digits_Int(d);
    uchar i;
        
    if(MAX == 0 || MAX < lDigits) MAX = lDigits;
    i = MAX;
    while(1) {
        i--;
        lData2 = lData / GRS232_Get_Pow(10, i);
        lData = lData % GRS232_Get_Pow(10, i);
        GRS232_Write_Char(HEXA_MAP[lData2]);
        if(i == 0) break;
    }
}
//===============================================
void GRS232_Write_Char(char c) {
	char lData = c;
	if(c == '\n') lData = 0x0D;
	SBUF = lData;		
	while (TI == 0);		
	TI = 0;			
}
//===============================================
uchar GRS232_Get_Length(const char* d) {
    uchar i = 0;
    while(1) {
        if(d[i] == 0) break;
        i++;
    }
    return i;
}
//===============================================
uchar GRS232_Get_Digits_Hexa(uint d) {
	uchar lDigits = 0;
    while(1) {
        d = d / 16;
        lDigits++;
        if(d == 0) break;
    }
	return lDigits;
}
//===============================================
uchar GRS232_Get_Digits_Int(uint d) {
	uchar lDigits = 0;
    while(1) {
        d = d / 10;
        lDigits++;
        if(d == 0) break;
    }
	return lDigits;
}
//===============================================
uchar GRS232_Get_Digits_Bin(uint d) {
	uchar lDigits = 0;
    while(1) {
        d = d / 2;
        lDigits++;
        if(d == 0) break;
    }
	return lDigits;
}
//===============================================
ulong GRS232_Get_Pow(uchar d, uchar p) {
    uchar i = 0;
    ulong lData = 1;
    if(p == 0) return 1;
    while(1) {
        lData *= d;
        i++;
        if(i == p) break;
    }
    return lData;
}
//===============================================
