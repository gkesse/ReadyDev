//===============================================
#include "GStrategyJava.h"
#include "GString.h"
//===============================================
void GStrategyJava_Set_Name(GStrategyO* obj, const char* name);
void GStrategyJava_Print(GStrategyO* obj);
//===============================================
GStrategyO* GStrategyJava_New() {
	GStrategyO* lParent = GStrategy_New();
    GStrategyJavaO* lChild = (GStrategyJavaO*)malloc(sizeof(GStrategyJavaO));

    lChild->m_parent = lParent;
    lChild->m_name = 0;

    lParent->m_child = lChild;
    lParent->Delete = GStrategyJava_Delete;
    lParent->Set_Name = GStrategyJava_Set_Name;
    lParent->Print = GStrategyJava_Print;
    return lParent;
}
//===============================================
void GStrategyJava_Delete(GStrategyO* obj) {
	GStrategyJavaO* lStrategy = obj->m_child;
	GString()->Free(lStrategy->m_name);
	GStrategy_Delete(obj);
}
//===============================================
void GStrategyJava_Set_Name(GStrategyO* obj, const char* name) {
	GStrategyJavaO* lStrategy = obj->m_child;
	GString()->Free(lStrategy->m_name);
	lStrategy->m_name = GString()->Copy(name);
}
//===============================================
void GStrategyJava_Print(GStrategyO* obj) {
	GStrategyJavaO* lStrategy = obj->m_child;
	printf("Je suis une strategie JAVA : %s\n", lStrategy->m_name);
}
//===============================================
