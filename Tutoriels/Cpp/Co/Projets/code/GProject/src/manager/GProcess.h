//===============================================
#ifndef _GProcess_
#define _GProcess_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GProcessO GProcessO;
//===============================================
struct _GProcessO {
    void* m_child;
    void (*Delete)(GProcessO* obj);
    void (*Run)(int argc, char** argv);
};
//===============================================
GProcessO* GProcess_New();
void GProcess_Delete(GProcessO* obj);
GProcessO* GProcess();
//===============================================
#endif
//===============================================
