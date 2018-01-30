//===============================================
#include "GTurnOffCommand.h"
//===============================================
GTurnOffCommand::GTurnOffCommand(GLight* light) {
    m_light = light;
}
//===============================================
GTurnOffCommand::~GTurnOffCommand() {

}
//===============================================
void GTurnOffCommand::execute() {
    m_light->turnOff();
}
//===============================================
