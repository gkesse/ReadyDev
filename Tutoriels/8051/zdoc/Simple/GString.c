//===============================================
#include "GString.h"
//===============================================
int GString_Size(const char* str) {
    int i = 0;
    while(str[i] != 0) {i += 1;}
    return i;
}
//===============================================
int GString_Is_Equal(const char* str1, const char* str2) reentrant {
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
void GString_Copy(char* str1, const char* str2) reentrant {
    int i = 0;
    while(str2[i] != 0) {
        str1[i] = str2[i];
        i += 1;
    }
    str1[i] = 0;
}
//===============================================
