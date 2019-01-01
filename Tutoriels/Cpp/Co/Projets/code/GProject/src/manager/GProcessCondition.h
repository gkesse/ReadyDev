//===============================================
#ifndef _GProcessCondition_
#define _GProcessCondition_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct GProcessConditionO GProcessConditionO;
//===============================================
struct GProcessConditionO {
    void (*Strategy)(GProcessO* obj);
};
//===============================================
GProcessConditionO* GProcessCondition();
//===============================================
#endif
//===============================================
