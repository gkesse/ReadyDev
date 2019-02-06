//===============================================
#include "GSingleton.h"
#include "GString.h"
//===============================================
static GSingletonO m_GSingletonO;
static int m_GSingleton = FALSE;
//===============================================
GSingletonO GSingleton_Constructor();
void GSingleton_Function(GSingletonO* obj);
void GSingleton_Set_Data(const char* data);
char* GSingleton_Get_Data();
//===============================================
GSingletonO GSingleton_Constructor() {
    GSingletonO lObj;
    GString().Copy(lObj.m_data, "NONE");
    GSingleton_Function(&lObj);
    return lObj;
}
//===============================================
void GSingleton_Function(GSingletonO* obj) {
    obj->Set_Data = GSingleton_Set_Data;
    obj->Get_Data = GSingleton_Get_Data;
}
//===============================================
GSingletonO GSingleton() {
    if(m_GSingleton == FALSE) {
        m_GSingletonO = GSingleton_Constructor();
        m_GSingleton = TRUE;
    }
    return m_GSingletonO;
}
//===============================================
void GSingleton_Set_Data(const char* data) {
    GString().Copy(m_GSingletonO.m_data, data);
}
//===============================================
char* GSingleton_Get_Data() {
    return m_GSingletonO.m_data;
}
//===============================================
