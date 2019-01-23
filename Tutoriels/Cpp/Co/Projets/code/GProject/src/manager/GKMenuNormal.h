//===============================================
#ifndef _GKMenuNormal_
#define _GKMenuNormal_
//===============================================
#include "GKMenu.h"
//===============================================
typedef struct _GKMenuNormalO GKMenuNormalO;
//===============================================
struct _GKMenuNormalO {
	GKMenuO* m_GKMenuO;
    void (*Strategy)(GKMenuO* obj);
};
//===============================================
GKMenuNormalO* GKMenuNormal();
//===============================================
#endif
//===============================================
