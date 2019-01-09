//===============================================
#include "GString.h"
//===============================================
static GStringO* m_GStringO = 0;
//===============================================
GStringO* GString_Constructor();
void GString_Init(GStringO* obj);
int GString_Size(const char* str);
int GString_Is_Equal(const char* str1, const char* str2);
char* GString_Copy(const char* str);
char* GString_Trim(const char* str);
char** GString_Split(const char* str, const char* sep, int* count);
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
    obj->Copy = GString_Copy;
    obj->Trim = GString_Trim;
    obj->Split = GString_Split;
}
//===============================================
GStringO* GKString() {
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
    if(lSize1 != lSize2) {return GFALSE;}
    int i = 0;
    while(str1[i] != 0) {
        if(str1[i] != str2[i]) {return GFALSE;}
        i += 1;
    }
    return GTRUE;
}
//===============================================
char* GString_Copy(const char* str) {
    int lLength = strlen(str);
    char* lCopy = (char*)malloc(sizeof(char)*lLength);
    int i = 0;
    while(str[i] != 0) {
        lCopy[i] = str[i];
        i++;
    }
     lCopy[i] = 0;
    return lCopy;
}
//===============================================
char* GString_Trim(const char* str) {
    if(str[0] == 0) return 0;
    int lStart = 0;
    int lEnd = strlen(str) - 1;
    while(isspace(str[lStart]) != 0 && lStart < lEnd) lStart++;
    while(isspace(str[lEnd]) != 0 && lEnd > lStart) lEnd--;
    if(lStart == lEnd) {if(isspace(str[lStart]) != 0) {return 0;}}
    lEnd += 1;
    int lLength = lEnd - lStart + 1;
    char* lTrim = (char*)malloc(sizeof(char)*lLength);
    int i = lStart;
    int j = 0;
    while(i < lEnd) {
        lTrim[j] = str[i];
        i++;
        j++;
    }
    lTrim[j] = 0;
    return lTrim;
}
//===============================================
char** GString_Split(const char* str, const char* sep, int* count) {
    int lPos = 0;
    int lCount = 0;
    while(str[lPos] != 0) {
        char lChar = str[lPos];
        char* lSearch = strchr(sep, lChar);
        if(lSearch != 0) lCount++;
        lPos++;
    }
    lCount += 1;
    *count = lCount;
    char** lSplit = (char**)malloc(sizeof(char*)*lCount);
    char* lStr = GString_Copy(str);
    char* lToken = strtok(lStr, sep);
    int lTok = 0;
    while(lToken != 0) {
        lSplit[lTok] = GString_Copy(lToken);
        lToken = strtok(0, sep);
        lTok++;
    }
    free(lStr);
    return lSplit;
}
//===============================================
