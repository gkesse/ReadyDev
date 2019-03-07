//===============================================
#ifndef _GStrategyPython_
#define _GStrategyPython_
//===============================================
#include "GStrategy.h"
//===============================================
typedef struct _GStrategyPythonO GStrategyPythonO;
//===============================================
struct _GStrategyPythonO {
	void* m_parent;
	char* m_name;
};
//===============================================
GStrategyO* GStrategyPython_New();
void GStrategyPython_Delete(GStrategyO* obj);
//===============================================
#endif
//===============================================
