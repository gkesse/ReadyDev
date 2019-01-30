//===============================================
#include "GKMenu.h"
#include "GKMenuNormal.h"
#include "GKString.h"
//===============================================
GKMenuO* GKMenu_New() {
    GKMenuO* lObj = (GKMenuO*)malloc(sizeof(GKMenuO));
    lObj->m_child = 0;
    lObj->Delete = GKMenu_Delete;
    lObj->m_widget = 0;
    return lObj;
}
//===============================================
void GKMenu_Delete(GKMenuO* obj) {
    if(obj != 0) {
        if(obj->m_child != 0) {
            free(obj->m_child);
            obj->m_child = 0;
        }
        if(obj->m_widget != 0) {
            gtk_widget_destroy(GTK_WIDGET(obj->m_widget));
            obj->m_widget = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
GKMenuO* GKMenu(const char* key) {
    if(GKString()->Is_Equal(key, "NORMAL")) return GKMenuNormal();
    return GKMenuNormal();
}
//===============================================
