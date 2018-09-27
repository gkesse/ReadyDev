//===============================================
#ifndef _GStrategyJava_
#define _GStrategyJava_
//===============================================
#include "GStrategy.h"
//===============================================
typedef struct GStrategyJavaO GStrategyJavaO;
//===============================================
struct GStrategyJavaO {
    void (*Strategy)(GStrategyO* obj);
};
//===============================================
GStrategyJavaO* GStrategyJava();
//===============================================
#endif
//===============================================
