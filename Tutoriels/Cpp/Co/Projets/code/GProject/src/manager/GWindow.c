//===============================================
#include "GWindow.h"
#include "GWindowNormal.h"
#include "GKString.h"
#include "GConfig.h"
//===============================================
GWindowO* GWindow_New() {
    GWindowO* lObj = (GWindowO*)malloc(sizeof(GWindowO));
    lObj->m_child = 0;
    lObj->m_maximize = FALSE;
    return lObj;
}
//===============================================
void GWindow_Delete() {
    GWindowO* lObj = GWindow();
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
GWindowO* GWindow() {
    char* lKey = GConfig()->Get_Data("WINDOW");
    if(GKString()->Is_Equal(lKey, "NORMAL")) return GWindowNormal();
    return GWindowNormal();
}
//===============================================

