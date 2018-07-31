//===============================================
#include "GProcessLedFlash.h"
#include "GLedFlash.h"
//===============================================
static GProcessLedFlashO m_GProcessLedFlashO;
static int m_GProcessLedFlash = FALSE;
//===============================================
GProcessLedFlashO GProcessLedFlash_Constructor();
void GProcessLedFlash_Function(GProcessLedFlashO* obj);
void GProcessLedFlash_Strategy(GProcessO* obj);
//===============================================
void GProcessLedFlash_Init();
void GProcessLedFlash_Update();
//===============================================
GProcessLedFlashO GProcessLedFlash_Constructor() {
    GProcessLedFlashO lObj;
    GProcessLedFlash_Function(&lObj);
    return lObj;
}
//===============================================
void GProcessLedFlash_Function(GProcessLedFlashO* obj) {
    obj->Strategy = GProcessLedFlash_Strategy;
}
//===============================================
GProcessLedFlashO GProcessLedFlash() {
    if(m_GProcessLedFlash == FALSE) {
        m_GProcessLedFlashO = GProcessLedFlash_Constructor();
        m_GProcessLedFlash = TRUE;
    }
    return m_GProcessLedFlashO;
}
//===============================================
void GProcessLedFlash_Strategy(GProcessO* obj) {
    obj->Init = GProcessLedFlash_Init;
    obj->Update = GProcessLedFlash_Update;
}
//===============================================
void GProcessLedFlash_Init() {
    GLedFlash().Init();
}
//===============================================
void GProcessLedFlash_Update() {
    GLedFlash().Update();
}
//===============================================
