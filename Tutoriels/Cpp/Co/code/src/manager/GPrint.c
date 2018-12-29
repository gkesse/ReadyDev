//===============================================
#include "GPrint.h"
//===============================================
static GPrintO* m_GPrintO = 0;
//===============================================
GPrintO* GPrint_Constructor();
void GPrint_Init(GPrintO* obj);
void GPrint_Print(const char* data);
//===============================================
GPrintO* GPrint_Constructor() {
    GPrintO* lObj = (GPrintO*)malloc(sizeof(GPrintO));
    GPrint_Init(lObj);
    return lObj; 
}
//===============================================
void GPrint_Init(GPrintO* obj) {
    obj->Print = GPrint_Print;
}
//===============================================
GPrintO* GPrint() {
    if(m_GPrintO == 0) {
        m_GPrintO = GPrint_Constructor();
    }
    return m_GPrintO;
}
//===============================================
void GPrint_Print(const char* data) {
    printf("%s\n", data);
}
//===============================================
