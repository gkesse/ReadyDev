//===============================================
#ifndef _GWindowNormal_
#define _GWindowNormal_
//===============================================
#include "GWindow.h"
//===============================================
typedef struct _GWindowNormalO GWindowNormalO;
//===============================================
struct _GWindowNormalO {
    GWindowO* m_parent;
};
//===============================================
GWindowO* GWindowNormal_New();
void GWindowNormal_Delete();
GWindowO* GWindowNormal();
//===============================================
#endif
//===============================================
