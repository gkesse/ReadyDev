//===============================================
#ifndef _GStrategy_
#define _GStrategy_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GStrategy GStrategy;
//===============================================
static GStrategy m_GStrategy;
static int m_GStrategy_Instance = FALSE;
//===============================================
GStrategy GStrategy_Constructor();
void GStrategy_Init(GStrategy* obj);
GStrategy GStrategy_Instance();
int GStrategy_Open_Database();
int GStrategy_Is_Equal(const char* str1, const char* str2);
//===============================================
struct GStrategy {
    int (*Run)(const char* str);
    int (*Is_Equal)(const char* str1, const char* str2);  
};
//===============================================
GStrategy GStrategy_Constructor() {
    GStrategy lObj;
    GStrategy_Init(&lObj);
    return lObj; 
}
//===============================================
void GStrategy_Init(GStrategy* obj) {
    obj->Size = GStrategy_Size;
    obj->Is_Equal = GStrategy_Is_Equal;
}
//===============================================
GStrategy GStrategy_Instance() {
    if(m_GStrategy_Instance == FALSE) {
        m_GStrategy = GStrategy_Constructor();
        m_GStrategy_Instance = TRUE;
    }
    return m_GStrategy;
}
//===============================================
int GStrategy_Size(const char* str) {
    int i = 0;
    while(str[i] != 0) {i += 1;}
    return i;
}
//===============================================
int GStrategy_Is_Equal(const char* str1, const char* str2) {
    int lSize1 = GStrategy_Size(str1);
    int lSize2 = GStrategy_Size(str2);
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
