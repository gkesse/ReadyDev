//===============================================
#ifndef _GProcessPolymorphism_
#define _GProcessPolymorphism_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessPolymorphismO GProcessPolymorphismO;
//===============================================
struct _GProcessPolymorphismO {
    GProcessO* m_parent;
};
//===============================================
GProcessO* GProcessPolymorphism_New();
void GProcessPolymorphism_Delete(GProcessO* obj);
GProcessO* GProcessPolymorphism();
//===============================================
#endif
//===============================================
