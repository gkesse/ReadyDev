//===============================================
#ifndef _GCommand_
#define _GCommand_
//===============================================
#include "GLight.h"
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GCommand {
public:
    static GCommand* Create(const string& cmd, GLight* light);

public:
    virtual void execute() = 0;
};
//===============================================
#endif
//===============================================
