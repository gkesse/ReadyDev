//===============================================
#ifndef _GProcessConfig_
#define _GProcessConfig_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessConfigO GProcessConfigO;
//===============================================
struct _GProcessConfigO {
    GProcessO* m_parent;
};
//===============================================
GProcessO* GProcessConfig_New();
void GProcessConfig_Delete(GProcessO* obj);
GProcessO* GProcessConfig();
//===============================================
#endif
//===============================================
