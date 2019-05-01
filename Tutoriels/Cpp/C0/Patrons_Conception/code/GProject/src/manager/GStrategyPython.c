//===============================================
#include "GStrategyPython.h"
#include "GString.h"
//===============================================
void GStrategyPython_Set_Name(GStrategyO* obj, const char* name);
void GStrategyPython_Print(GStrategyO* obj);
//===============================================
GStrategyO* GStrategyPython_New() {
	GStrategyO* lParent = GStrategy_New();
    GStrategyPythonO* lChild = (GStrategyPythonO*)malloc(sizeof(GStrategyPythonO));

    lChild->m_parent = lParent;
    lChild->m_name = 0;

    lParent->m_child = lChild;
    lParent->Delete = GStrategyPython_Delete;
    lParent->Set_Name = GStrategyPython_Set_Name;
    lParent->Print = GStrategyPython_Print;
    return lParent;
}
//===============================================
void GStrategyPython_Delete(GStrategyO* obj) {
	GStrategyPythonO* lStrategy = obj->m_child;
	GString()->Free(lStrategy->m_name);
	GStrategy_Delete(obj);
}
//===============================================
void GStrategyPython_Set_Name(GStrategyO* obj, const char* name) {
	GStrategyPythonO* lStrategy = obj->m_child;
	GString()->Free(lStrategy->m_name);
	lStrategy->m_name = GString()->Copy(name);
}
//===============================================
void GStrategyPython_Print(GStrategyO* obj) {
	GStrategyPythonO* lStrategy = obj->m_child;
	printf("Je suis une strategie PYTHON : %s\n", lStrategy->m_name);
}
//===============================================
