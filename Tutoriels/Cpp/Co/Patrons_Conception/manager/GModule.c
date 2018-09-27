//===============================================
#include "GModule.h"
//===============================================
GModule* GModule_Constructor() {
    GModule* lObj = (GModule*)malloc(sizeof(GModule));
    sprintf(lObj->m_data, "%s", "_NONE_");
    return lObj; 
}
//===============================================
GModule* GModule_Constructor2(const char* data) {
    GModule* lObj = (GModule*)malloc(sizeof(GModule));
    sprintf(lObj->m_data, "%s", data);
    return lObj; 
}
//===============================================
void GModule_Destructor(GModule* obj) {
    free(obj);
    obj = 0;
}
//===============================================
void GModule_Print(GModule* obj) {
    char lData[50];
    sprintf(lData, "Donnee: %s\n", obj->m_data);
    printf(lData);
}
//===============================================
void GModule_Set_Data(GModule* obj, const char* data) {
    sprintf(obj->m_data, "%s", data);
}
//===============================================
char* GModule_Get_Data(GModule* obj) {
    return obj->m_data;
}
//===============================================
