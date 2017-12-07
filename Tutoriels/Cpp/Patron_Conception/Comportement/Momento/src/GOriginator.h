//===============================================
#ifndef _GOriginator_
#define _GOriginator_
//===============================================
#include "GMomento.h"
//===============================================
#include <iostream>
#include <string>
#include <memory>
//===============================================
using namespace std;
//===============================================
class GOriginator{
public:
    GOriginator();
    ~GOriginator();

public:
    void setState(const string& state);
    GMomento* saveToMomemto();
    void restoreFromMomemto(GMomento* momemto);

private:
    string m_state;
};
//===============================================
#endif
//===============================================
