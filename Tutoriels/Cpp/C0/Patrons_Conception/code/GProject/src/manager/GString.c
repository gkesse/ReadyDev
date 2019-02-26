//===============================================
#include "GString.h"
//===============================================
static GStringO* m_GStringO = 0;
//===============================================
int GString_Size(const char* str);
int GString_Is_Equal(const char* str1, const char* str2);
char* GString_Copy(const char* str);
char* GString_Trim(const char* str);
char** GString_Split(const char* str, const char* sep, int* count);
void GString_Free(char* ptr);
void GString_Free2(char** ptr, const int size);
//===============================================
GStringO* GString_New() {
    GStringO* lObj = (GStringO*)malloc(sizeof(GStringO));
    lObj->m_child = 0;
    lObj->Delete = GString_Delete;
    lObj->Size = GString_Size;
    lObj->Is_Equal = GString_Is_Equal;
    lObj->Copy = GString_Copy;
    lObj->Trim = GString_Trim;
    lObj->Split = GString_Split;
    lObj->Free = GString_Free;
    lObj->Free2 = GString_Free2;
    return lObj; 
}
//===============================================
void GString_Delete() {
    GStringO* lObj = GString();
    if(lObj != 0) {
        if(lObj->m_child != 0) {
            free(lObj->m_child);
            lObj->m_child = 0;
        }
        free(lObj);
        lObj = 0;
    }
}
//===============================================
GStringO* GString() {
    if(m_GStringO == 0) {
        m_GStringO = GString_New();
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
char* GString_Copy(const char* str) {
    int lLength = GString_Size(str) + 1;
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
    int lEnd = GString()->Size(str) - 1;
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
    char* lStr = GString()->Copy(str);
    char* lToken = strtok(lStr, sep);
    int lTok = 0;
    while(lToken != 0) {
        lSplit[lTok] = GString()->Copy(lToken);
        lToken = strtok(0, sep);
        lTok++;
    }
    free(lStr);
    return lSplit;
}
//===============================================
void GString_Free(char* ptr) {
    if(ptr != 0) {
        free(ptr);
        ptr = 0;
    }
}
//===============================================
void GString_Free2(char** ptr, const int size) {
    if(ptr != 0) {
        for(int i = 0; i < size; i++) {
            if(ptr[i] != 0) {
                free(ptr[i]);
                ptr[i] = 0;
            }
        }
        free(ptr);
        ptr = 0;
    }
}
//===============================================
