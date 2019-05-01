//===============================================
#include "GWorkspace.h"
#include "GWorkspaceNormal.h"
#include "GKString.h"
//===============================================
GWorkspaceO* GWorkspace_New() {
    GWorkspaceO* lObj = (GWorkspaceO*)malloc(sizeof(GWorkspaceO));
    lObj->m_child = 0;
    lObj->Delete = GWorkspace_Delete;
    lObj->m_widget = 0;
    return lObj;
}
//===============================================
void GWorkspace_Delete(GWorkspaceO* obj) {
    if(obj != 0) {
        if(obj->m_child != 0) {
            free(obj->m_child);
            obj->m_child = 0;
        }
        if(obj->m_widget != 0) {
            gtk_widget_destroy(obj->m_widget);
            obj->m_widget = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
GWorkspaceO* GWorkspace(const char* key) {
    if(GKString()->Is_Equal(key, "NORMAL")) return GWorkspaceNormal();
    return GWorkspaceNormal();
}
//===============================================
