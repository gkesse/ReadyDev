//===============================================
#include "GMenu.h"
#include "GMenuNormal.h"
#include "GString.h"
#include "GConfig.h"
//===============================================
static GMenuO* m_GMenuO = 0;
//===============================================
GMenuO* GMenu_Constructor();
void GMenu_Init(GMenuO* obj);
void GMenu_Strategy(const char* key);
//===============================================
GMenuO* GMenu_Constructor() {
    GMenuO* lObj = (GMenuO*)malloc(sizeof(GMenuO));
    GMenu_Init(lObj);
    return lObj;
}
//===============================================
void GMenu_Init(GMenuO* obj) {
    obj->Strategy = GMenu_Strategy;
}
//===============================================
GMenuO* GKMenu(const char* key) {
	m_GMenuO = GMenu_Constructor();
    m_GMenuO->Strategy(key);
    return m_GMenuO;
}
//===============================================
void GMenu_Strategy(const char* key) {
    if(GKString()->Is_Equal(key, "NORMAL")) {GMenuNormal()->Strategy(m_GMenuO);}
    else {GMenuNormal()->Strategy(m_GMenuO);}
}
//===============================================

