//===============================================
#ifndef _GString_
#define _GString_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GString GString;
//===============================================
static GString m_GString;
static int m_GString_Instance = FALSE;
//===============================================
GString GString_Constructor();
void GString_Init(GString* obj);
GString GString_Instance();
int GString_Size(const char* str);
int GString_Is_Equal(const char* str1, const char* str2);
//===============================================
struct GString {
    int (*Size)(const char* str);
    int (*Is_Equal)(const char* str1, const char* str2);  
};
//===============================================
GString GString_Constructor() {
    GString lObj;
    GString_Init(&lObj);
    return lObj; 
}
//===============================================
void GString_Init(GString* obj) {
    obj->Size = GString_Size;
    obj->Is_Equal = GString_Is_Equal;
}
//===============================================
GString GString_Instance() {
    if(m_GString_Instance == FALSE) {
        m_GString = GString_Constructor();
        m_GString_Instance = TRUE;
    }
    return m_GString;
}
//===============================================
int GString_Size(const char* str) {
    int i = 0;
    while(str[i] != 0) {i += 1;}
    return i;
}
//===============================================
int GString_Is_Equal(const char* str1, const char* str2) {
    int lSize1 = GString_Size(str1);
    int lSize2 = GString_Size(str2);
    if(lSize1 != lSize2) {return FALSE;}
    int i = 0;
    while(str1[i] != 0) {
        if(str1[i] != str2[i]) {return FALSE;}
        i += 1;
    }
    return TRUE;
}
//===============================================
#endif
//===============================================