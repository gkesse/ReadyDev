//===============================================
#include "GPortFlash.h"
#include "GPortDef.h"
//===============================================
static bit GPortFlash_State = FALSE;
static uint GPortFlash_Time = 0;
//===============================================
void GPortFlash_Init();
void GPortFlash_Update();
//===============================================
static GPortFlashO m_GPortFlashO;
static int m_GPortFlash = FALSE;
//===============================================
GPortFlashO GPortFlash_Constructor();
void GPortFlash_Function(GPortFlashO* obj);
//===============================================
GPortFlashO GPortFlash_Constructor() {
    GPortFlashO lObj;
    GPortFlash_Function(&lObj);
    return lObj;
}
//===============================================
void GPortFlash_Function(GPortFlashO* obj) {
    obj->Init = GPortFlash_Init;
    obj->Update = GPortFlash_Update;
}
//===============================================
GPortFlashO GPortFlash() {
    if(m_GPortFlash == FALSE) {
        m_GPortFlashO = GPortFlash_Constructor();
        m_GPortFlash = TRUE;
    }
    return m_GPortFlashO;
}
//===============================================
void GPortFlash_Init() {
    LED_PORT = LED_PORT_OFF;
}
//===============================================
void GPortFlash_Update() {
    if(++GPortFlash_Time >= 1000) {
        GPortFlash_Time = 0;
        if(GPortFlash_State == FALSE) {
            GPortFlash_State = TRUE;
            LED_PORT = 0x0F;
        }
        else {
            GPortFlash_State = FALSE;
            LED_PORT = 0xF0;
        }
    }
}
//===============================================
