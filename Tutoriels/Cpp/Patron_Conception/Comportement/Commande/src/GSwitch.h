//===============================================
#ifndef _GSwitch_
#define _GSwitch_
//===============================================
#include "GCommand.h"
//===============================================
class GSwitch {
public:
    GSwitch(GCommand* turnOn, GCommand* turnOff);
    ~GSwitch();

public:
    void turnOn();
    void turnOff();

private:
    GCommand* m_turnOn;
    GCommand* m_turnOff;
};
//===============================================
#endif
//===============================================
