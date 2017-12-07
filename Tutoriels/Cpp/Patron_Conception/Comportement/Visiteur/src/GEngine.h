//===============================================
#ifndef _GEngine_
#define _GEngine_
//===============================================
#include "GCarItem.h"
//===============================================
class GEngine : public GCarItem {
public:
    GEngine();
    ~GEngine();

public:
    void accept(GVisitor* visitor);
};
//===============================================
#endif
//===============================================
