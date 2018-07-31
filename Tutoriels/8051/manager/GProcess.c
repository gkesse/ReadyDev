//===============================================
#include "GProcess.h"
#include "GProcessLedFlash.h"
#include "GString.h"
//===============================================
static GProcessO m_GProcessO;
static int m_GProcess = FALSE;
//===============================================
GProcessO GProcess_Constructor();
void GProcess_Function(GProcessO* obj);
void GProcess_Strategy(const char* strategy);
//===============================================
void GProcess_Init();
void GProcess_Update();
//===============================================
GProcessO GProcess_Constructor() {
    GProcessO lObj;
    GProcess_Function(&lObj);
    return lObj;
}
//===============================================
void GProcess_Function(GProcessO* obj) {
    obj->Strategy = GProcess_Strategy;
    obj->Init = GProcess_Init;
    obj->Update = GProcess_Update;
}
//===============================================
GProcessO GProcess() {
    if(m_GProcess == FALSE) {
        m_GProcessO = GProcess_Constructor();
        GProcess_Strategy("DEFAULT");
        m_GProcess = TRUE;
    }
    return m_GProcessO;
}
//===============================================
void GProcess_Strategy(const char* strategy) {
    if(GString().Is_Equal(strategy, "LED_FLASH")) {GProcessLedFlash().Strategy(&m_GProcessO);}
    else {GProcessLedFlash().Strategy(&m_GProcessO);}
}
//===============================================
void GProcess_Init() {
    m_GProcessO.I.Init();
}
//===============================================
void GProcess_Update() {
    m_GProcessO.I.Update();
}
//===============================================
