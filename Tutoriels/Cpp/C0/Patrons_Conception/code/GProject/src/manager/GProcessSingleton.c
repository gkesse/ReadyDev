//===============================================
#include "GProcessSingleton.h"
#include "GSingleton.h"
//===============================================
static GProcessO* m_GProcessSingletonO = 0;
//===============================================
void GProcessSingleton_Run(int argc, char** argv);
//===============================================
GProcessO* GProcessSingleton_New() {
    GProcessO* lParent = GProcess_New();
    GProcessSingletonO* lChild = (GProcessSingletonO*)malloc(sizeof(GProcessSingletonO));
    lChild->m_parent = lParent;
    lParent->m_child = lChild;
    lParent->Delete = GProcessSingleton_Delete;
    lParent->Run = GProcessSingleton_Run;
    return lParent;
}
//===============================================
void GProcessSingleton_Delete(GProcessO* obj) {
    GProcess_Delete(obj);
}
//===============================================
GProcessO* GProcessSingleton() {
    if(m_GProcessSingletonO == 0) {
        m_GProcessSingletonO = GProcessSingleton_New();
    }
    return m_GProcessSingletonO;
}
//===============================================
void GProcessSingleton_Run(int argc, char** argv) {
	GSingleton()->Set_Name("JAVA");
	GSingleton()->Print();
	GSingleton()->Set_Name("PYTHON");
	GSingleton()->Print();
	GSingleton()->Delete();
}
//===============================================
