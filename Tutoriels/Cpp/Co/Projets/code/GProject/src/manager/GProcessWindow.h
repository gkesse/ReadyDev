//===============================================
#ifndef _GProcessWindow_
#define _GProcessWindow_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _GProcessWindowO GProcessWindowO;
//===============================================
struct _GProcessWindowO {
	GProcessO* m_parent;
};
//===============================================
GProcessO* GProcessWindow_New();
void GProcessWindow_Delete(GProcessO* obj);
GProcessO* GProcessWindow();
//===============================================
#endif
//===============================================
