//===============================================
#ifndef _GWorkspace_
#define _GWorkspace_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GWorkspaceO GWorkspaceO;
//===============================================
struct _GWorkspaceO {
    void* m_child;
    void (*Delete)(GWorkspaceO* obj);
    GtkWidget* m_widget;
};
//===============================================
GWorkspaceO* GWorkspace_New();
void GWorkspace_Delete(GWorkspaceO* obj);
GWorkspaceO* GWorkspace(const char* key);
//===============================================
#endif
//===============================================
