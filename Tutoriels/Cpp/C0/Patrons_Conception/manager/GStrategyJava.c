//===============================================
#include "GStrategyJava.h"
//===============================================
static GStrategyJavaO* m_GStrategyJavaO = 0;
//===============================================
GStrategyJavaO* GStrategyJava_Constructor();
void GStrategyJava_Interface(GStrategyJavaO* obj);
void GStrategyJava_Strategy(GStrategyO* obj);
void GStrategyJava_Run();
//===============================================
GStrategyJavaO* GStrategyJava_Constructor() {
    GStrategyJavaO* lObj = (GStrategyJavaO*)malloc(sizeof(GStrategyJavaO));
    GStrategyJava_Interface(lObj);
    return lObj;
}
//===============================================
void GStrategyJava_Interface(GStrategyJavaO* obj) {
    obj->Strategy = GStrategyJava_Strategy;
}
//===============================================
GStrategyJavaO* GStrategyJava() {
    if(m_GStrategyJavaO == 0) {
        m_GStrategyJavaO = GStrategyJava_Constructor();
    }
    return m_GStrategyJavaO;
}
//===============================================
void GStrategyJava_Strategy(GStrategyO* obj) {
    obj->Run = GStrategyJava_Run;
}
//===============================================
void GStrategyJava_Run() {
    printf("Strategie: Execution de la strategie JAVA\n");
}
//===============================================
