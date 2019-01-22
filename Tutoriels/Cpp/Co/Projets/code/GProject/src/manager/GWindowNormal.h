//===============================================
#ifndef _GWindowNormal_
#define _GWindowNormal_
//===============================================
#include "GWindow.h"
//===============================================
typedef struct _GWindowNormalO GWindowNormalO;
//===============================================
struct _GWindowNormalO {
    void (*Strategy)(GWindowO* obj);
};
//===============================================
GWindowNormalO* GWindowNormal();
//===============================================
#endif
//===============================================
