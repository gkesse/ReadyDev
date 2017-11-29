//===============================================
#ifndef _GRecord_
#define _GRecord_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GRecord {
public:
    static GRecord* Instance();

public:
    virtual GRecord* clone() = 0;
};
//===============================================
#endif
//===============================================
