//===============================================
#ifndef _GTraffic_
#define _GTraffic_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GTraffic {
public:
    static GTraffic* Create(const string& traffic);

public:
    virtual void red() = 0;
    virtual void amber() = 0;
    virtual void green() = 0;
};
//===============================================
#endif
//===============================================
