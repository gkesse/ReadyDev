//===============================================
#ifndef _GSingleton_
#define _GSingleton_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GSingleton GSingleton;
//===============================================
GSingleton* GSingleton_Constructor();
void GSingleton_Init(GSingleton* obj);
void GSingleton_Print(GSingleton* obj);
void GSingleton_Set_Data(GSingleton* obj, const char* data);
void GSingleton_Instance();
//===============================================
typedef struct GSingleton {
    //===============================================
    void (*Print)(GSingleton* obj);
    void (*Set_Data)(GSingleton* obj, const char* data);
    //===============================================
    char m_data[50];
    //===============================================
} GSingleton;
//===============================================
GSingleton* GSingleton_Constructor() {
    GSingleton* lObj = (GSingleton*)malloc(sizeof(GSingleton));
    sprintf(lObj->m_data, "%s", "_NONE_");
    return lObj; 
}
//===============================================
void GSingleton_Init(GSingleton* obj) {
    obj->Print = GSingleton_Print;
    obj->Set_Data = GSingleton_Set_Data;
}
//===============================================
void GSingleton_Print(GSingleton* obj) {
    char lData[50];
    sprintf(lData, "Donnee: %s\n", obj->m_data);
    printf(lData);
}
//===============================================
void GSingleton_Set_Data(GSingleton* obj, const char* data) {
    sprintf(lObj->m_data, "%s", data);
}
//===============================================
void GSingleton_Instance() {
    static GSingleton* m_instance = 0;
    if(m_instance == 0) {
        m_instance = GSingleton_Constructor();
    }
    return m_instance;
}
//===============================================
#endif
//===============================================
