//===============================================
#ifndef _GRS232_
#define _GRS232_
//===============================================
#include "GInclude.h"
//===============================================
void GRS232_Init(uint aBaudRate);
void GRS232_Write_Char_To_Buffer(char aChar);
void GRS232_Write_String_To_Buffer(const char* aString);
void GRS232_Send_Char(char aChar);
void GRS232_Update();
//===============================================
#endif
//===============================================
