//===============================================
#ifndef _GProcessVariable_
#define _GProcessVariable_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct GProcessVariableO GProcessVariableO;
//===============================================
struct GProcessVariableO {
    void (*Strategy)(GProcessO* obj);
};
//===============================================
GProcessVariableO* GProcessVariable();
//===============================================
#endif
//===============================================
