//===============================================
#ifndef _GFlash_
#define _GFlash_
//===============================================
#include "GInclude.h"
#include "GString.h"
//===============================================
typedef struct GFlashO GFlashO;
typedef struct GFlashI GFlashI;
//===============================================
typedef void (*pGFlash_Init)();
typedef void (*pGFlash_Update)();
//===============================================
static GFlashO m_GFlashO;
static int m_GFlash = FALSE;
//===============================================
GFlashO GFlash_Constructor();
void GFlash_Function(GFlashO* obj);
GFlashO GFlash();
void GFlash_Strategy(const char* strategy)
void GFlash_Init();
void GFlash_Update();
//===============================================
struct GFlashI {
    pGFlash_Init Init;
    pGFlash_Update Update;
};
//===============================================
struct GFlashO {
    GFlashI I;
    void (*Strategy)(const char* strategy);
    void (*Init)();
    void (*Update)();
};
//===============================================
#include "GFlashLed.h"
//===============================================
GFlashO GFlash_Constructor() {
    GFlashO lObj;
    GFlash_Function(&lObj);
    return lObj;
}
//===============================================
void GFlash_Function(GFlashO* obj) {
    obj->Strategy = GFlash_Strategy;
    obj->Init = GFlash_Init;
    obj->Update = GFlash_Update;
}
//===============================================
GFlashO GFlash() {
    if(m_GFlash == FALSE) {
        m_GFlashO = GFlash_Constructor();
        m_GFlash = TRUE;
    }
    return m_GFlashO;
}
//===============================================
void GFlash_Strategy(const char* strategy) {
    if(GString().Is_Equal(strategy, "Led")) {GFlashLed_Strategy(&m_GFlashO); return;}
    GFlashLed_Strategy(&m_GFlashO);
}
//===============================================
void GFlash_Init() {
    m_GFlashO.I.Init();
}
//===============================================
void GFlash_Update() {
    m_GFlashO.I.Update();
}
//===============================================
#endif
//===============================================
