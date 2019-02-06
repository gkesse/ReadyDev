//===============================================
#ifndef _GConfigGlib_
#define _GConfigGlib_
//===============================================
#include "GConfig.h"
//===============================================
typedef struct _GConfigGlibO GConfigGlibO;
//===============================================
struct _GConfigGlibO {
    GConfigO* m_parent;
    GHashTable* m_dataMap;
};
//===============================================
GConfigO* GConfigGlib_New();
void GConfigGlib_Delete();
GConfigO* GConfigGlib();
//===============================================
#endif
//===============================================
