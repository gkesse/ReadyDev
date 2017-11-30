//===============================================
#include "GTurnOnCommand.h"
//===============================================
GTurnOnCommand::GTurnOnCommand(GLight* light) {
    m_light = light;
}
//===============================================
GTurnOnCommand::~GTurnOnCommand() {

}
//===============================================
void GTurnOnCommand::execute() {
    m_light->turnOn();
}
//===============================================
