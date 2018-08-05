//===============================================
#ifndef _GSingleton_
#define _GSingleton_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GSingleton GSingleton;
//===============================================
static GSingleton* m_GSingleton = 0;
//===============================================
GSingleton* GSingleton_Constructor();
void GSingleton_Init(GSingleton* obj);
void GSingleton_Print();
void GSingleton_Set_Data(const char* data);
GSingleton* GSingleton_Instance();
//===============================================
typedef struct GSingleton {
    //===============================================
    void (*Print)();
    void (*Set_Data)(const char* data);
    //===============================================
    char m_data[50];
    //===============================================
} GSingleton;
//===============================================
GSingleton* GSingleton_Constructor() {
    GSingleton* lObj = (GSingleton*)malloc(sizeof(GSingleton));
    sprintf(lObj->m_data, "%s", "_NONE_");
    GSingleton_Init(lObj);
    return lObj; 
}
//===============================================
void GSingleton_Init(GSingleton* obj) {
    obj->Print = GSingleton_Print;
    obj->Set_Data = GSingleton_Set_Data;
}
//===============================================
void GSingleton_Print() {
    char lData[50];
    sprintf(lData, "Donnee: %s\n", m_GSingleton->m_data);
    printf(lData);
}
//===============================================
void GSingleton_Set_Data(const char* data) {
    sprintf(m_GSingleton->m_data, "%s", data);
}
//===============================================
GSingleton* GSingleton_Instance() {
    if(m_GSingleton == 0) {
        m_GSingleton = GSingleton_Constructor();
    }
    return m_GSingleton;
}
//===============================================
#endif
//===============================================
