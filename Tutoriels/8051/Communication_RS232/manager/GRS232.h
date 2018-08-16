//===============================================
#ifndef _GRS232_
#define _GRS232_
//===============================================
#include "GInclude.h"
//===============================================
void GRS232_Init(uint aBaudRate);
void GRS232_Update();
void GRS232_Write_String(const char* aString);
void GRS232_Write_Int(uint aInt, uchar aMax);
//===============================================
#endif
//===============================================
