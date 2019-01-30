//===============================================
#include "GProcess.h"
#include "GProcessWindow.h"
#include "GKString.h"
#include "GConfig.h"
//===============================================
GProcessO* GProcess_New() {
    GProcessO* lObj = (GProcessO*)malloc(sizeof(GProcessO));
    lObj->m_child = 0;
    return lObj;
}
//===============================================
void GProcess_Delete(GProcessO* obj) {
    if(obj != 0) {
        if(obj->m_child != 0) {
            free(obj->m_child);
            obj->m_child = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
GProcessO* GProcess() {
    char* lKey = GConfig()->Get_Data("PROCESS");
    if(GKString()->Is_Equal(lKey, "WINDOW")) return GProcessWindow();
    return GProcessWindow();
}
//===============================================
