//===============================================
#ifndef _GProcessKeyboard_
#define _GProcessKeyboard_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct GProcessKeyboardO GProcessKeyboardO;
//===============================================
struct GProcessKeyboardO {
    void (*Strategy)(GProcessO* obj);
};
//===============================================
GProcessKeyboardO* GProcessKeyboard();
//===============================================
#endif
//===============================================
