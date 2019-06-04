//===============================================
#ifndef _GProcessSocketClient_
#define _GProcessSocketClient_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessSocketClientO GProcessSocketClientO;
//===============================================
struct _GProcessSocketClientO {
    GProcessO* m_parent;
};
//===============================================
GProcessO* GProcessSocketClient_New();
void GProcessSocketClient_Delete(GProcessO* obj);
GProcessO* GProcessSocketClient();
//===============================================
#endif
//===============================================
