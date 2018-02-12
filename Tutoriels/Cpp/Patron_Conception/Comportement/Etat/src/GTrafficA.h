//===============================================
#ifndef _GTrafficA_
#define _GTrafficA_
//===============================================
#include "GTraffic.h"
//===============================================
class GTrafficA : public GTraffic {
public:
    GTrafficA();
    ~GTrafficA();

public:
    void red();
    void amber();
    void green();
};
//===============================================
#endif
//===============================================
