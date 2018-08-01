//===============================================
#include "GProcess.h"
#include "GLedFlash.h"
#include "GPortFlash.h"
//===============================================
static GProcessO m_GProcessO;
static int m_GProcess = FALSE;
//===============================================
GProcessO GProcess_Constructor();
void GProcess_Function(GProcessO* obj);
void GProcess_Strategy(int strategy);
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
        GProcess_Strategy(0);
        m_GProcess = TRUE;
    }
    return m_GProcessO;
}
//===============================================
void GProcess_Strategy(int strategy) {
    if(strategy == 0) {GLedFlash().Strategy(&m_GProcessO);}
    else if(strategy == 1) {GPortFlash().Strategy(&m_GProcessO);}
    else {GLedFlash().Strategy(&m_GProcessO);}
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
