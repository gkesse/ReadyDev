//===============================================
#ifndef _GKMenuNormal_
#define _GKMenuNormal_
//===============================================
#include "GKMenu.h"
//===============================================
typedef struct _GKMenuNormalO GKMenuNormalO;
//===============================================
struct _GKMenuNormalO {
    GKMenuO* m_parent;
    GtkWidget* m_addModuleMenu;
};
//===============================================
GKMenuO* GKMenuNormal_New();
void GKMenuNormal_Delete(GKMenuO* obj);
GKMenuO* GKMenuNormal();
//===============================================
#endif
//===============================================