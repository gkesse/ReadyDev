//===============================================
#ifndef _GKString_
#define _GKString_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GKStringO GKStringO;
//===============================================
struct _GKStringO {
    int (*Size)(const char* str);
    int (*Is_Equal)(const char* str1, const char* str2);
    char* (*Copy)(const char* str);
    char* (*Trim)(const char* str);
    char** (*Split)(const char* str, const char* sep, int* count);
};
//===============================================
GKStringO* GKString();
//===============================================
#endif
//===============================================
