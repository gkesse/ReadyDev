//===============================================
#ifndef _GTurnOnCommand_
#define _GTurnOnCommand_
//===============================================
#include "GCommand.h"
#include "GLight.h"
//===============================================
class GTurnOnCommand : public GCommand {
public:
    GTurnOnCommand(GLight* light);
    ~GTurnOnCommand();

public:
    void execute();

private:
    GLight* m_light;

};
//===============================================
#endif
//===============================================
