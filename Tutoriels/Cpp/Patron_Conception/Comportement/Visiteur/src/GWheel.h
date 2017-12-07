//===============================================
#ifndef _GWheel_
#define _GWheel_
//===============================================
#include <iostream>
#include <string>
#include <memory>
//===============================================
using namespace std;
//===============================================
#include "GCarItem.h"
//===============================================
class GWheel : public GCarItem {
public:
    GWheel();
    GWheel(const string& name);
    ~GWheel();

public:
    void setName(const string& name);
    string getName() const;
    void accept(GVisitor* visitor);

private:
    string m_name;
};
//===============================================
#endif
//===============================================
