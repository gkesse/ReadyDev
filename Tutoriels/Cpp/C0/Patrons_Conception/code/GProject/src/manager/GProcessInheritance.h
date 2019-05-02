//===============================================
#ifndef _GProcessInheritance_
#define _GProcessInheritance_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessInheritanceO GProcessInheritanceO;
//===============================================
struct _GProcessInheritanceO {
    GProcessO* m_parent;
};
//===============================================
GProcessO* GProcessInheritance_New();
void GProcessInheritance_Delete(GProcessO* obj);
GProcessO* GProcessInheritance();
//===============================================
#endif
//===============================================
