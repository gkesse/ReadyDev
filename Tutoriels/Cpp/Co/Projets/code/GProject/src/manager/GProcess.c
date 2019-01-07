//===============================================
#include "GProcess.h"
#include "GProcessWindow.h"
#include "GString.h"
#include "GConfig.h"
//===============================================
static GProcessO* m_GProcessO = 0;
//===============================================
GProcessO* GProcess_Constructor();
void GProcess_Init(GProcessO* obj);
void GProcess_Strategy();
void GProcess_Run(int argc, char** argv);
//===============================================
GProcessO* GProcess_Constructor() {
    GProcessO* lObj = (GProcessO*)malloc(sizeof(GProcessO));
    GProcess_Init(lObj);
    return lObj;
}
//===============================================
void GProcess_Init(GProcessO* obj) {
    obj->Strategy = GProcess_Strategy;
    obj->Run = GProcess_Run;
}
//===============================================
GProcessO* GProcess() {
    if(m_GProcessO == 0) {
        m_GProcessO = GProcess_Constructor();
    }
    m_GProcessO->Strategy();
    return m_GProcessO;
}
//===============================================
void GProcess_Strategy() {
    char* lKey = GConfig()->Get_Data("PROCESS");
    if(GKString()->Is_Equal(lKey, "WINDOW")) {GProcessWindow()->Strategy(m_GProcessO);}
    else {GProcessWindow()->Strategy(m_GProcessO);}
}
//===============================================
void GProcess_Run(int argc, char** argv) {
    m_GProcessO->Run(argc, argv);
}
//===============================================
