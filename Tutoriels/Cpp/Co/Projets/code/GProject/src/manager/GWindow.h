//===============================================
#ifndef _GWindow_
#define _GWindow_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GWindowO GWindowO;
//===============================================
struct _GWindowO {
	void* m_child;
    void (*Delete)();
    void (*Initialize)(int argc, char** argv);
    void (*Show)();
};
//===============================================
GWindowO* GWindow_New();
void GWindow_Delete();
GWindowO* GWindow();
//===============================================
#endif
//===============================================
