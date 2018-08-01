//===============================================
#include "GLedFlash.h"
#include "GPortDef.h"
//===============================================
static bit gLedFlash_State = FALSE;
static uint gLedFlash_Time = 0;
//===============================================
void GLedFlash_Strategy(GProcessO* obj);
void GLedFlash_Init();
void GLedFlash_Update();
//===============================================
static GLedFlashO m_GLedFlashO;
static int m_GLedFlash = FALSE;
//===============================================
GLedFlashO GLedFlash_Constructor();
void GLedFlash_Function(GLedFlashO* obj);
//===============================================
GLedFlashO GLedFlash_Constructor() {
    GLedFlashO lObj;
    GLedFlash_Function(&lObj);
    return lObj;
}
//===============================================
void GLedFlash_Function(GLedFlashO* obj) {
    obj->Strategy = GLedFlash_Strategy;
}
//===============================================
GLedFlashO GLedFlash() {
    if(m_GLedFlash == FALSE) {
        m_GLedFlashO = GLedFlash_Constructor();
        m_GLedFlash = TRUE;
    }
    return m_GLedFlashO;
}
//===============================================
void GLedFlash_Strategy(GProcessO* obj) {
    obj->Init = GLedFlash_Init;
    obj->Update = GLedFlash_Update;
}
//===============================================
void GLedFlash_Init() {
    LED0 = LED_OFF;
}
//===============================================
void GLedFlash_Update() {
    if(++gLedFlash_Time >= 1000) {
        gLedFlash_Time = 0;
        if(gLedFlash_State == FALSE) {
            gLedFlash_State = TRUE;
            LED0 = LED_ON;
        }
        else {
            gLedFlash_State = FALSE;
            LED0 = LED_OFF;
        }
    }
}
//===============================================
