//===============================================
#ifndef _GStrategyPython_
#define _GStrategyPython_
//===============================================
#include "GStrategy.h"
//===============================================
typedef struct GStrategyPythonO GStrategyPythonO;
//===============================================
struct GStrategyPythonO {
    void (*Strategy)(GStrategyO* obj);
};
//===============================================
GStrategyPythonO* GStrategyPython();
//===============================================
#endif
//===============================================
