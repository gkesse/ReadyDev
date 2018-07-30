//===============================================
#ifndef _GFlashLed_
#define _GFlashLed_
//===============================================
#include "GFlash_H.h"
//===============================================
void GFlashLed_Strategy(GFlashO* obj);
void GFlashLed_Init();
void GFlashLed_Update();
//===============================================
void GFlashLed_Strategy(GFlashO* obj) {
    obj->I.Init = GFlashLed_Init;
    obj->I.Update = GFlashLed_Update;
}
//===============================================
void GFlashLed_Init() {
    
}
//===============================================
void GFlashLed_Update() {
    
}
//===============================================
#endif
//===============================================
