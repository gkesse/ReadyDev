//===============================================
#ifndef _GProcessStrategy_
#define _GProcessStrategy_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessStrategyO GProcessStrategyO;
//===============================================
struct _GProcessStrategyO {
    GProcessO* m_parent;
};
//===============================================
GProcessO* GProcessStrategy_New();
void GProcessStrategy_Delete(GProcessO* obj);
GProcessO* GProcessStrategy();
//===============================================
#endif
//===============================================
