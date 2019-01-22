//===============================================
#ifndef _GTitleNormal_
#define _GTitleNormal_
//===============================================
#include "GTitle.h"
//===============================================
typedef struct _GTitleNormalO GTitleNormalO;
//===============================================
struct _GTitleNormalO {
    void (*Strategy)(GTitleO* obj);
};
//===============================================
GTitleNormalO* GTitleNormal();
//===============================================
#endif
//===============================================
