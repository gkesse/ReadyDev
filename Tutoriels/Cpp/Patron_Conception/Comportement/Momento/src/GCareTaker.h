//===============================================
#ifndef _GCareTaker_
#define _GCareTaker_
//===============================================
#include "GMomento.h"
//===============================================
#include <iostream>
#include <string>
#include <memory>
#include <vector>
//===============================================
using namespace std;
//===============================================
class GCareTaker {
public:
    GCareTaker();
    ~GCareTaker();

public:
    void addMomento(GMomento* momento);
    GMomento* getMomento(const int& index);

protected:
    vector<GMomento*> m_momentoMap;
};
//===============================================
#endif
//===============================================
