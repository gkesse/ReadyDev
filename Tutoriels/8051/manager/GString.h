//===============================================
#ifndef _GString_
#define _GString_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GStringO GStringO;
//===============================================
static GStringO m_GStringO;
static int m_GString = FALSE;
//===============================================
GStringO GString_Constructor();
void GString_Function(GStringO* obj);
GStringO GString();
int GString_Size(const char* str);
int GString_Is_Equal(const char* str1, const char* str2);
//===============================================
struct GStringO {
    int (*Size)(const char* str);
    int (*Is_Equal)(const char* str1, const char* str2);
};
//===============================================
GStringO GString_Constructor() {
    GStringO lObj;
    GString_Function(&lObj);
    return lObj;
}
//===============================================
void GString_Function(GStringO* obj) {
    obj->Size = GString_Size;
    obj->Is_Equal = GString_Is_Equal;
}
//===============================================
GStringO GString() {
    if(m_GString == FALSE) {
        m_GStringO = GString_Constructor();
        m_GString = TRUE;
    }
    return m_GStringO;
}
//===============================================
int GString_Size(const char* str) {
    int i = 0;
    while(str[i] != 0) {i += 1;}
    return i;
}
//===============================================
int GString_Is_Equal(const char* str1, const char* str2) {
    int i = 0;
    int lSize1 = GString_Size(str1);
    int lSize2 = GString_Size(str2);
    if(lSize1 != lSize2) {return FALSE;}
    while(str1[i] != 0) {
        if(str1[i] != str2[i]) {return FALSE;}
        i += 1;
    }
    return TRUE;
}
//===============================================
#endif
//===============================================
