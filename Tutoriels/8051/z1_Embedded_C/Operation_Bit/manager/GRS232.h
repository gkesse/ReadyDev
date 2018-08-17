//===============================================
#ifndef _GRS232_
#define _GRS232_
//===============================================
#include "GInclude.h"
//===============================================
void GRS232_Init();
void GRS232_Write_String(const char* aString);
void GRS232_Write_String_Space(const char* aString, uchar aSpace, char aChar);
void GRS232_Write_Hexa(uint aInt, uchar aMax);
void GRS232_Write_Bin(uint aInt, uchar aMax);
void GRS232_Write_Int(uint aInt, uchar aMax);
//===============================================
#endif
//===============================================
