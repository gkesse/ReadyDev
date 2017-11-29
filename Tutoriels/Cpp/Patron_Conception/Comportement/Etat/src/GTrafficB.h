//===============================================
#ifndef _GTrafficB_
#define _GTrafficB_
//===============================================
#include "GTraffic.h"
//===============================================
class GTrafficB : public GTraffic {
public:
    GTrafficB();
    ~GTrafficB();

public:
    void red();
    void amber();
    void green();
};
//===============================================
#endif
//===============================================
