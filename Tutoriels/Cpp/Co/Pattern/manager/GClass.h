//===============================================
#ifndef _GClass_
#define _GClass_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct {
    char m_data[50];
} GClass;
//===============================================
GClass* GClass_Constructor() {
    GClass* lObj = (GClass*)malloc(sizeof(GClass));
    sprintf(lObj->m_data, "%s", "_NONE_");
    return lObj; 
}
//===============================================
GClass* GClass_Constructor2(const char* data) {
    GClass* lObj = (GClass*)malloc(sizeof(GClass));
    sprintf(lObj->m_data, "%s", data);
    return lObj; 
}
//===============================================
void GClass_Destructor(GClass* obj) {
    free(obj);
    obj = 0;
}
//===============================================
void GClass_Print_Data(GClass* obj) {
    char lData[50];
    sprintf(lData, "Data: %s\n", obj->m_data);
    printf(lData);
}
//===============================================
#endif
//===============================================
