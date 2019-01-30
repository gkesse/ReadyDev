//===============================================
#ifndef _GTitleNormal_
#define _GTitleNormal_
//===============================================
#include "GTitle.h"
//===============================================
typedef struct _GTitleNormalO GTitleNormalO;
//===============================================
struct _GTitleNormalO {
    GTitleO* m_parent;
};
//===============================================
GTitleO* GTitleNormal_New();
void GTitleNormal_Delete(GTitleO* obj);
GTitleO* GTitleNormal();
//===============================================
#endif
//===============================================
