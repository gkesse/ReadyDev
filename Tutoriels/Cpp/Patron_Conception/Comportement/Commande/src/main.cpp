//===============================================
#include "GLight.h"
#include "GCommand.h"
#include "GSwitch.h"
//===============================================
int main(int argc, char** argv) {
    GLight* m_light = new GLight;
    GCommand* m_turnOn = GCommand::Create("TurnOn", m_light);
    GCommand* m_turnOff = GCommand::Create("TurnOff", m_light);
    GSwitch* m_switch = new GSwitch(m_turnOn, m_turnOff);
    m_switch->turnOn();
    m_switch->turnOff();
    return 0;
}
//===============================================
