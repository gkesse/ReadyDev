//===============================================
#ifndef _GStrategy_
#define _GStrategy_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GStrategy {
public:
    static GStrategy* Instance();

public:
    virtual void execute() = 0;
};
//===============================================
#endif
//===============================================
