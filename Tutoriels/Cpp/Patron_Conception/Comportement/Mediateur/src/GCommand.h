//===============================================
#ifndef _GCommand_
#define _GCommand_
//===============================================
#include <iostream>
#include <string>
#include <memory>
//===============================================
using namespace std;
//===============================================
class GCommand {
public:
    string getName() const;
    virtual void execute() = 0;

protected:
    string m_name;
};
//===============================================
#endif
//===============================================
