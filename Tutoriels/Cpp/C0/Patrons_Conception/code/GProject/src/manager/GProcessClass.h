//===============================================
#ifndef _GProcessClass_
#define _GProcessClass_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessClassO GProcessClassO;
//===============================================
struct _GProcessClassO {
    GProcessO* m_parent;
};
//===============================================
GProcessO* GProcessClass_New();
void GProcessClass_Delete(GProcessO* obj);
GProcessO* GProcessClass();
//===============================================
#endif
//===============================================
