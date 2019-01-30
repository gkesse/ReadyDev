//===============================================
#ifndef _GWorkspaceNormal_
#define _GWorkspaceNormal_
//===============================================
#include "GWorkspace.h"
//===============================================
typedef struct _GWorkspaceNormalO GWorkspaceNormalO;
//===============================================
struct _GWorkspaceNormalO {
    GWorkspaceO* m_parent;
};
//===============================================
GWorkspaceO* GWorkspaceNormal_New();
void GWorkspaceNormal_Delete(GWorkspaceO* obj);
GWorkspaceO* GWorkspaceNormal();
//===============================================
#endif
//===============================================
