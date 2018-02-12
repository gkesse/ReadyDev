//===============================================
#include "GSwitch.h"
//===============================================
GSwitch::GSwitch(GCommand* turnOn, GCommand* turnOff) {
    m_turnOn = turnOn;
    m_turnOff = turnOff;
}
//===============================================
GSwitch::~GSwitch() {

}
//===============================================
void GSwitch::turnOn() {
    m_turnOn->execute();
}
//===============================================
void GSwitch::turnOff() {
    m_turnOff->execute();
}
//===============================================
