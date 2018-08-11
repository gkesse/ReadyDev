//===============================================
#ifndef _GRS232_
#define _GRS232_
//===============================================
#include "GInclude.h"
//===============================================
void GRS232_Init();
void GRS232_Write_String(const char* d);
void GRS232_Write_Hexa(uint d, uchar MAX);
void GRS232_Write_Bin(uchar d, uchar MAX);
void GRS232_Write_Int(uint d, uchar MAX);
//===============================================
#endif
//===============================================
