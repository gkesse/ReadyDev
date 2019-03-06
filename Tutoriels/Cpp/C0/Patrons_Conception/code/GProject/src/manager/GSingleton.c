//===============================================
#include "GSingleton.h"
#include "GString.h"
//===============================================
static GSingletonO* m_GSingletonO = 0;
//===============================================
void GSingleton_Set_Name(const char* name);
void GSingleton_Print();
//===============================================
GSingletonO* GSingleton_New() {
    GSingletonO* lObj = (GSingletonO*)malloc(sizeof(GSingletonO));
    lObj->Delete = GSingleton_Delete;
    lObj->Set_Name = GSingleton_Set_Name;
    lObj->Print = GSingleton_Print;
    lObj->m_name = 0;
    return lObj;
}
//===============================================
void GSingleton_Delete() {
    if(m_GSingletonO != 0) {
    	if(m_GSingletonO->m_name != 0) {
            free(m_GSingletonO->m_name);
            m_GSingletonO->m_name = 0;
        }
        free(m_GSingletonO);
        m_GSingletonO = 0;
    }
}
//===============================================
GSingletonO* GSingleton() {
    if(m_GSingletonO == 0) {
        m_GSingletonO = GSingleton_New();
    }
    return m_GSingletonO;
}
//===============================================
void GSingleton_Set_Name(const char* name) {
	GString()->Free(m_GSingletonO->m_name);
	m_GSingletonO->m_name = GString()->Copy(name);
}
//===============================================
void GSingleton_Print() {
	printf("Je suis un singleton: %s\n", m_GSingletonO->m_name);
}
//===============================================
