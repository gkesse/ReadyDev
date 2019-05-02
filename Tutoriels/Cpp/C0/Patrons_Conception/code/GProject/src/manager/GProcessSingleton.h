//===============================================
#ifndef _GProcessSingleton_
#define _GProcessSingleton_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessSingletonO GProcessSingletonO;
//===============================================
struct _GProcessSingletonO {
    GProcessO* m_parent;
};
//===============================================
GProcessO* GProcessSingleton_New();
void GProcessSingleton_Delete(GProcessO* obj);
GProcessO* GProcessSingleton();
//===============================================
#endif
//===============================================
