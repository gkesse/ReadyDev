//===============================================
#include "GClass.h"
//===============================================
void GClass_Destructor(GClass* obj);
void GClass_Init(GClass* obj);
void GClass_Destructor(GClass* obj);
void GClass_Print(GClass* obj);
void GClass_Set_Data(GClass* obj, const char* data);
char* GClass_Get_Data(GClass* obj);
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
void GClass_Init(GClass* obj) {
    obj->Destructor = GClass_Destructor;
    obj->Print = GClass_Print;
    obj->Set_Data = GClass_Set_Data;
    obj->Get_Data = GClass_Get_Data;
}
//===============================================
void GClass_Destructor(GClass* obj) {
    free(obj);
    obj = 0;
}
//===============================================
void GClass_Print(GClass* obj) {
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
