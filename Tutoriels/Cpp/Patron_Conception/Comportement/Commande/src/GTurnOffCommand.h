//===============================================
#ifndef _GTurnOffCommand_
#define _GTurnOffCommand_
//===============================================
#include "GCommand.h"
#include "GLight.h"
//===============================================
class GTurnOffCommand : public GCommand {
public:
    GTurnOffCommand(GLight* light);
    ~GTurnOffCommand();

public:
    void execute();

private:
    GLight* m_light;

};
//===============================================
#endif
//===============================================
