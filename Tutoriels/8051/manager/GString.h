//===============================================
#ifndef _GString_
#define _GString_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GStringO GStringO;
//===============================================
struct GStringO {
    int (*Size)(const char* str);
    int (*Is_Equal)(const char* str1, const char* str2) reentrant;
    void (*Copy)(char* str1, const char* str2) reentrant; 
};
//===============================================
GStringO GString();
//===============================================
#endif
//===============================================
