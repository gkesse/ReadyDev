//===============================================
#include "GTitle.h"
#include "GTitleNormal.h"
#include "GKString.h"
//===============================================
GTitleO* GTitle_New() {
    GTitleO* lObj = (GTitleO*)malloc(sizeof(GTitleO));
    lObj->m_child = 0;
    lObj->Delete = GTitle_Delete;
    lObj->m_widget = 0;
    lObj->m_titleWidget = GTitleWidget_New();
    return lObj;
}
//===============================================
void GTitle_Delete(GTitleO* obj) {
    if(obj != 0) {
        if(obj->m_child != 0) {
            free(obj->m_child);
            obj->m_child = 0;
        }
        if(obj->m_widget != 0) {
            gtk_widget_destroy(obj->m_widget);
            obj->m_widget = 0;
        }
        if(obj->m_titleWidget != 0) {
            gtk_widget_destroy(GTK_WIDGET(obj->m_titleWidget));
            obj->m_widget = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
GTitleO* GTitle(const char* key) {
    if(GKString()->Is_Equal(key, "NORMAL")) return GTitleNormal();
    return GTitleNormal();
}
//===============================================
