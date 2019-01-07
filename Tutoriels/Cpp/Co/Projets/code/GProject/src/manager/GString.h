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
    int (*Is_Equal)(const char* str1, const char* str2);
    char* (*Copy)(const char* str);
    char* (*Trim)(const char* str);
    char** (*Split)(const char* str, const char* sep, int* count);
};
//===============================================
GStringO* GKString();
//===============================================
#endif
//===============================================
