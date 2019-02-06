//===============================================
#ifndef _GTitle_
#define _GTitle_
//===============================================
#include "GInclude.h"
#include "GTitleWidget.h"
//===============================================
typedef struct _GTitleO GTitleO;
//===============================================
struct _GTitleO {
    void* m_child;
    void (*Delete)(GTitleO* obj);
    GtkWidget* m_widget;
    GTitleWidget* m_titleWidget;
};
//===============================================
GTitleO* GTitle_New();
void GTitle_Delete(GTitleO* obj);
GTitleO* GTitle(const char* key);
//===============================================
#endif
//===============================================
