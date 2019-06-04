//===============================================
#include "GConfig.h"
#include "GConfigNormal.h"
#include "GString.h"
//===============================================
GConfigO* GConfig_New() {
    GConfigO* lObj = (GConfigO*)malloc(sizeof(GConfigO));
    lObj->m_child = 0;
    return lObj;
}
//===============================================
void GConfig_Delete() {
    GConfigO* lObj = GConfig();
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
GConfigO* GConfig() {
    char* lKey = "NORMAL";
    if(GString()->Is_Equal(lKey, "NORMAL")) return GConfigNormal();
    return GConfigNormal();
}
//===============================================

