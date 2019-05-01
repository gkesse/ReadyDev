//===============================================
#include "GStrategy.h"
#include "GStrategyPython.h"
#include "GStrategyJava.h"
#include "GString.h"
#include "GConfig.h"
//===============================================
static GStrategyO* m_GStrategyO = 0;
//===============================================
GStrategyO* GStrategy_Constructor();
void GStrategy_Init(GStrategyO* obj);
void GStrategy_Strategy();
void GStrategy_Run();
//===============================================
GStrategyO* GStrategy_Constructor() {
    GStrategyO* lObj = (GStrategyO*)malloc(sizeof(GStrategyO));
    GStrategy_Init(lObj);
    return lObj;
}
//===============================================
void GStrategy_Init(GStrategyO* obj) {
    obj->Strategy = GStrategy_Strategy;
    obj->Run = GStrategy_Run;
}
//===============================================
GStrategyO* GStrategy() {
    if(m_GStrategyO == 0) {
        m_GStrategyO = GStrategy_Constructor();
    }
    m_GStrategyO->Strategy();
    return m_GStrategyO;
}
//===============================================
void GStrategy_Strategy() {
    char* lStrategy = GConfig()->Get_Data("STRATEGY");
    if(GString()->Is_Equal(lStrategy, "PYTHON")) {GStrategyPython()->Strategy(m_GStrategyO);}
    else if(GString()->Is_Equal(lStrategy, "JAVA")) {GStrategyJava()->Strategy(m_GStrategyO);}
    else {GStrategyPython()->Strategy(m_GStrategyO);}
}
//===============================================
void GStrategy_Run() {
    m_GStrategyO->Run();
}
//===============================================
