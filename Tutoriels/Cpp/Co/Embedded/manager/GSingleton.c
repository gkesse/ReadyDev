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
    GSingleton_Function(&lObj);
    return lObj;
}
//===============================================
void GSingleton_Function(GSingletonO* obj) {
    obj->Strategy = GSingleton_Strategy;
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
    
}
//===============================================
char* GSingleton_Get_Data() {
    
}
//===============================================
