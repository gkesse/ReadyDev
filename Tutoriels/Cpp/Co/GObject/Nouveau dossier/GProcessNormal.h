//===============================================
#ifndef _GProcessNormal_
#define _GProcessNormal_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessNormalO GProcessNormalO;
//===============================================
struct _GProcessNormalO {
	GProcessO* m_parent;
};
//===============================================
GProcessO* GProcessNormal_New();
void GProcessNormal_Delete(GProcessO* obj);
GProcessO* GProcessNormal();
//===============================================
#endif
//===============================================
