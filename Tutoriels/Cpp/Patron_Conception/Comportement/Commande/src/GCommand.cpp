//===============================================
#include "GCommand.h"
#include "GTurnOnCommand.h"
#include "GTurnOffCommand.h"
//===============================================
GCommand* GCommand::Create(const string& cmd, GLight* light) {
    if(cmd == "TurnOn") {return new GTurnOnCommand(light);}
    else if(cmd == "TurnOff") {return new GTurnOffCommand(light);}
    return 0;
}
//===============================================
