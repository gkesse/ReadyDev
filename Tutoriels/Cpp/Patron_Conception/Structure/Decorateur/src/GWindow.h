//===============================================
#ifndef _GWindow_
#define _GWindow_
//===============================================
#include <iostream>
#include <string>
#include <memory>
//===============================================
using namespace std;
//===============================================
class GWindow {
public:
    void printDescription() const;
    virtual string getDescription() const = 0;
};
//===============================================
#endif
//===============================================
