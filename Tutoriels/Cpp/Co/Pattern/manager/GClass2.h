//===============================================
#ifndef _GClass_
#define _GClass_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct {
    //===============================================
    void (*Print_Data)(GClass* obj);
    void (*Set_Data)(GClass* obj, const char* data);
    void (*Get_Data)(GClass* obj);
    //===============================================
    char m_data[50];
} GClass;
//===============================================
GClass* GClass_Constructor() {
    GClass* lObj = (GClass*)malloc(sizeof(GClass));
    sprintf(lObj->m_data, "%s", "_NONE_");
    GClass_Init(lObj);
    return lObj; 
}
//===============================================
GClass* GClass_Constructor2(const char* data) {
    GClass* lObj = (GClass*)malloc(sizeof(GClass));
    sprintf(lObj->m_data, "%s", data);
    GClass_Init(lObj);
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
    sprintf(lData, "Donnee: %s\n", obj->m_data);
    printf(lData);
}
//===============================================
void GClass_Set_Data(GClass* obj, const char* data) {
    sprintf(obj->m_data, "%s", data);
}
//===============================================
char* GClass_Get_Data(GClass* obj) {
    return obj->m_data;
}
//===============================================
char* GClass_Init(GClass* obj) {
    obj->Print_Data = GClass_Print_Data;
    obj->Set_Data = GClass_Set_Data;
    obj->Get_Data = GClass_Get_Data;
}
//===============================================
#endif
//===============================================
