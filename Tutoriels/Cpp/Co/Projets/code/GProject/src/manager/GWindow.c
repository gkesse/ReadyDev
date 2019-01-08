//===============================================
#include "GWindow.h"
#include "GWindowNormal.h"
#include "GString.h"
#include "GConfig.h"
//===============================================
static GWindowO* m_GWindowO = 0;
//===============================================
GWindowO* GWindow_Constructor();
void GWindow_Init(GWindowO* obj);
void GWindow_Strategy();
//===============================================
GWindowO* GWindow_Constructor() {
    GWindowO* lObj = (GWindowO*)malloc(sizeof(GWindowO));
    GWindow_Init(lObj);
    return lObj;
}
//===============================================
void GWindow_Init(GWindowO* obj) {
    obj->Strategy = GWindow_Strategy;
}
//===============================================
GWindowO* GWindow() {
    if(m_GWindowO == 0) {
        m_GWindowO = GWindow_Constructor();
    }
    m_GWindowO->Strategy();
    return m_GWindowO;
}
//===============================================
void GWindow_Strategy() {
    char* lKey = GConfig()->Get_Data("PROCESS");
    if(GKString()->Is_Equal(lKey, "WINDOW")) {GWindowNormal()->Strategy(m_GWindowO);}
    else {GWindowNormal()->Strategy(m_GWindowO);}
}
//===============================================

