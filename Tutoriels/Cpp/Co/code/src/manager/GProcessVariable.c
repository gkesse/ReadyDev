//===============================================
#include "GProcessVariable.h"
//===============================================
static GProcessVariableO* m_GProcessVariableO = 0;
//===============================================
GProcessVariableO* GProcessVariable_Constructor();
void GProcessVariable_Interface(GProcessVariableO* obj);
void GProcessVariable_Strategy(GProcessO* obj);
void GProcessVariable_Run();
//===============================================
GProcessVariableO* GProcessVariable_Constructor() {
    GProcessVariableO* lObj = (GProcessVariableO*)malloc(sizeof(GProcessVariableO));
    GProcessVariable_Interface(lObj);
    return lObj;
}
//===============================================
void GProcessVariable_Interface(GProcessVariableO* obj) {
    obj->Strategy = GProcessVariable_Strategy;
}
//===============================================
GProcessVariableO* GProcessVariable() {
    if(m_GProcessVariableO == 0) {
        m_GProcessVariableO = GProcessVariable_Constructor();
    }
    return m_GProcessVariableO;
}
//===============================================
void GProcessVariable_Strategy(GProcessO* obj) {
    obj->Run = GProcessVariable_Run;
}
//===============================================
void GProcessVariable_Run() {
    printf("### Variable\n\n");
}
//===============================================
