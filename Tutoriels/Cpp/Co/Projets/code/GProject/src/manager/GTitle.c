//===============================================
#include "GTitle.h"
#include "GTitleNormal.h"
#include "GKString.h"
#include "GConfig.h"
//===============================================
GTitleO* m_GTitleO = 0;
//===============================================
GTitleO* GTitle_Constructor();
void GTitle_Init(GTitleO* obj);
void GTitle_Strategy(const char* key);
//===============================================
GTitleO* GTitle_Constructor() {
    GTitleO* lObj = (GTitleO*)malloc(sizeof(GTitleO));
    GTitle_Init(lObj);
    return lObj;
}
//===============================================
void GTitle_Init(GTitleO* obj) {
    obj->Strategy = GTitle_Strategy;
}
//===============================================
GTitleO* GTitle(const char* key) {
        m_GTitleO = GTitle_Constructor();
    m_GTitleO->Strategy(key);
    return m_GTitleO;
}
//===============================================
void GTitle_Strategy(const char* key) {
    if(GKString()->Is_Equal(key, "NORMAL")) {GTitleNormal()->Strategy(m_GTitleO);}
    else {GTitleNormal()->Strategy(m_GTitleO);}
}
//===============================================
