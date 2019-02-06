//===============================================
#include "GString.h"
//===============================================
static GStringO* m_GStringO = 0;
//===============================================
GStringO* GString_Constructor();
void GString_Init(GStringO* obj);
int GString_Size(const char* str);
int GString_Is_Equal(const char* str1, const char* str2);
//===============================================
GStringO* GString_Constructor() {
    GStringO* lObj = (GStringO*)malloc(sizeof(GStringO));
    GString_Init(lObj);
    return lObj; 
}
//===============================================
void GString_Init(GStringO* obj) {
    obj->Size = GString_Size;
    obj->Is_Equal = GString_Is_Equal;
}
//===============================================
GStringO* GString() {
    if(m_GStringO == 0) {
        m_GStringO = GString_Constructor();
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
