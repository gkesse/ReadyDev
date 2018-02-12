//===============================================
#ifndef _GController_
#define _GController_
//===============================================
#include "GTraffic.h"
//===============================================
class GController {
private:
    GController();

public:
    ~GController();
    static GController* Instance();

public:
    void initSystem();
    void greenState();
    void amberState();
    void redRedState1();
    void redState();
    void redAmberState();
    void redRedState2();

public:
    static GController* m_instance;
    GTraffic* m_trafficA;
    GTraffic* m_trafficB;
};
//===============================================
#endif
//===============================================
