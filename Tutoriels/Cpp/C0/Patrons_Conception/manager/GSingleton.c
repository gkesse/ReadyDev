//===============================================
#include "GSingleton.h"
//===============================================
static GSingletonO* m_GSingletonO = 0;
//===============================================
GSingletonO* GSingleton_Constructor();
void GSingleton_Init(GSingletonO* obj);
void GSingleton_Print();
void GSingleton_Set_Data(const char* data);
char* GSingleton_Get_Data();
//===============================================
GSingletonO* GSingleton_Constructor() {
    GSingletonO* lObj = (GSingletonO*)malloc(sizeof(GSingletonO));
    sprintf(lObj->m_data, "%s", "_NONE_");
    GSingleton_Init(lObj);
    return lObj; 
}
//===============================================
void GSingleton_Init(GSingletonO* obj) {
    obj->Print = GSingleton_Print;
    obj->Set_Data = GSingleton_Set_Data;
    obj->Get_Data = GSingleton_Get_Data;
}
//===============================================
GSingletonO* GSingleton() {
    if(m_GSingletonO == 0) {
        m_GSingletonO = GSingleton_Constructor();
    }
    return m_GSingletonO;
}
//===============================================
void GSingleton_Print() {
    char lData[50];
    sprintf(lData, "Donnee: %s\n", m_GSingletonO->m_data);
    printf(lData);
}
//===============================================
void GSingleton_Set_Data(const char* data) {
    sprintf(m_GSingletonO->m_data, "%s", data);
}
//===============================================
char* GSingleton_Get_Data() {
    return m_GSingletonO->m_data;
}
//===============================================
