//===============================================
#include "GStrategyPython.h"
//===============================================
static GStrategyPythonO* m_GStrategyPythonO = 0;
//===============================================
GStrategyPythonO* GStrategyPython_Constructor();
void GStrategyPython_Init(GStrategyPythonO* obj);
void GStrategyPython_Strategy(GStrategyO* obj);
void GStrategyPython_Run();
//===============================================
GStrategyPythonO* GStrategyPython_Constructor() {
    GStrategyPythonO* lObj = (GStrategyPythonO*)malloc(sizeof(GStrategyPythonO));
    GStrategyPython_Init(lObj);
    return lObj;
}
//===============================================
void GStrategyPython_Init(GStrategyPythonO* obj) {
    obj->Strategy = GStrategyPython_Strategy;
}
//===============================================
GStrategyPythonO* GStrategyPython() {
    if(m_GStrategyPythonO == 0) {
        m_GStrategyPythonO = GStrategyPython_Constructor();
    }
    return m_GStrategyPythonO;
}
//===============================================
void GStrategyPython_Strategy(GStrategyO* obj) {
    obj->Run = GStrategyPython_Run;
}
//===============================================
void GStrategyPython_Run() {
    printf("Strategie: Execution de la strategie PYTHON\n");
}
//===============================================
