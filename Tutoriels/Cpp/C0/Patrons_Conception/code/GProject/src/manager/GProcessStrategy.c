//===============================================
#include "GProcessStrategy.h"
#include "GStrategy.h"
//===============================================
static GProcessO* m_GProcessStrategyO = 0;
//===============================================
void GProcessStrategy_Run(int argc, char** argv);
//===============================================
GProcessO* GProcessStrategy_New() {
    GProcessO* lParent = GProcess_New();
    GProcessStrategyO* lChild = (GProcessStrategyO*)malloc(sizeof(GProcessStrategyO));

    lChild->m_parent = lParent;

    lParent->m_child = lChild;
    lParent->Delete = GProcessStrategy_Delete;
    lParent->Run = GProcessStrategy_Run;
    return lParent;
}
//===============================================
void GProcessStrategy_Delete(GProcessO* obj) {
    GProcess_Delete(obj);
}
//===============================================
GProcessO* GProcessStrategy() {
    if(m_GProcessStrategyO == 0) {
        m_GProcessStrategyO = GProcessStrategy_New();
    }
    return m_GProcessStrategyO;
}
//===============================================
void GProcessStrategy_Run(int argc, char** argv) {
	GStrategyO* lStrategy = 0;

	lStrategy = GStrategy("JAVA");
	lStrategy->Set_Name(lStrategy, "JavaStrategy");
	lStrategy->Print(lStrategy);
	lStrategy->Delete(lStrategy);

	lStrategy = GStrategy("PYTHON");
	lStrategy->Set_Name(lStrategy, "PythonStrategy");
	lStrategy->Print(lStrategy);
	lStrategy->Delete(lStrategy);
}
//===============================================
