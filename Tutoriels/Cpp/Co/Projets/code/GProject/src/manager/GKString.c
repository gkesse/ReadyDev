//===============================================
#include "GKString.h"
//===============================================
static GKStringO* m_GKStringO = 0;
//===============================================
int GKString_Size(const char* str);
int GKString_Is_Equal(const char* str1, const char* str2);
char* GKString_Copy(const char* str);
char* GKString_Trim(const char* str);
char** GKString_Split(const char* str, const char* sep, int* count);
void GKString_Free(char* ptr);
void GKString_Free2(char** ptr, const int size);
//===============================================
GKStringO* GKString_New() {
    GKStringO* lObj = (GKStringO*)malloc(sizeof(GKStringO));
    lObj->m_child = 0;
    lObj->Delete = GKString_Delete;
    lObj->Size = GKString_Size;
    lObj->Is_Equal = GKString_Is_Equal;
    lObj->Copy = GKString_Copy;
    lObj->Trim = GKString_Trim;
    lObj->Split = GKString_Split;
    lObj->Free = GKString_Free;
    lObj->Free2 = GKString_Free2;
    return lObj; 
}
//===============================================
void GKString_Delete() {
	GKStringO* lObj = GKString();
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
GKStringO* GKString() {
    if(m_GKStringO == 0) {
        m_GKStringO = GKString_New();
    }
    return m_GKStringO;
}
//===============================================
int GKString_Size(const char* str) {
    int i = 0;
    while(str[i] != 0) {i += 1;}
    return i;
}
//===============================================
int GKString_Is_Equal(const char* str1, const char* str2) {
    int lSize1 = GKString_Size(str1);
    int lSize2 = GKString_Size(str2);
    if(lSize1 != lSize2) {return FALSE;}
    int i = 0;
    while(str1[i] != 0) {
        if(str1[i] != str2[i]) {return FALSE;}
        i += 1;
    }
    return TRUE;
}
//===============================================
char* GKString_Copy(const char* str) {
    int lLength = GKString_Size(str) + 1;
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
char* GKString_Trim(const char* str) {
    if(str[0] == 0) return 0;
    int lStart = 0;
    int lEnd = GKString()->Size(str) - 1;
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
char** GKString_Split(const char* str, const char* sep, int* count) {
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
    char* lStr = GKString()->Copy(str);
    char* lToken = strtok(lStr, sep);
    int lTok = 0;
    while(lToken != 0) {
        lSplit[lTok] = GKString()->Copy(lToken);
        lToken = strtok(0, sep);
        lTok++;
    }
    free(lStr);
    return lSplit;
}
//===============================================
void GKString_Free(char* ptr) {
	if(ptr != 0) {
		free(ptr);
		ptr = 0;
	}
}
//===============================================
void GKString_Free2(char** ptr, const int size) {
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
