#ifndef _GSocketUnix_
#define _GSocketUnix_
//===============================================
#include "GSocket.h"
//===============================================
typedef struct _GSocketUnixO GSocketUnixO;
//===============================================
struct _GSocketUnixO {
    GSocketO* m_parent;
};
//===============================================
GSocketO* GSocketUnix_New();
void GSocketUnix_Delete(GSocketO* obj);
GSocketO* GSocketUnix();
//===============================================
#endif
//===============================================
