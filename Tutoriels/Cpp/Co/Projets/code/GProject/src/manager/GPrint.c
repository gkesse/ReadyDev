//===============================================
#include "GPrint.h"
//===============================================
static GPrintO* m_GPrintO = 0;
//===============================================
void GPrint_Print(const char* data);
//===============================================
GPrintO* GPrint_New() {
    GPrintO* lObj = (GPrintO*)malloc(sizeof(GPrintO));
    lObj->m_child = 0;
    lObj->Delete = GPrint_Delete;
    lObj->Print = GPrint_Print;
    return lObj; 
}
//===============================================
void GPrint_Delete() {
	GPrintO* lObj = GPrint();
	if(lObj != 0) {
		if(lObj->m_child != 0) {
			free(lObj->m_child);
			lObj->m_child = 0;
		}
		free(lObj);
		lObj = 0;
	}
}
//===============================================
GPrintO* GPrint() {
    if(m_GPrintO == 0) {
        m_GPrintO = GPrint_New();
    }
    return m_GPrintO;
}
//===============================================
void GPrint_Print(const char* data) {
    printf("%s\n", data);
}
//===============================================
