//===============================================
#ifndef _GKMenu_
#define _GKMenu_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GKMenuO GKMenuO;
//===============================================
struct _GKMenuO {
    void* m_child;
    void (*Delete)(GKMenuO* obj);
    GtkWidget* m_widget;
};
//===============================================
GKMenuO* GKMenu_New();
void GKMenu_Delete(GKMenuO* obj);
GKMenuO* GKMenu(const char* key);
//===============================================
#endif
//===============================================
