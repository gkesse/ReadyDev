//===============================================
#ifndef _GString_
#define _GString_
//===============================================
#include "GInclude.h"
//===============================================
int GString_Size(const char* str);
int GString_Is_Equal(const char* str1, const char* str2) reentrant;
void GString_Copy(char* str1, const char* str2) reentrant;
//===============================================
#endif
//===============================================
