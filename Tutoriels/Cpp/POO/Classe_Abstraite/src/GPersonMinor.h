//===============================================
#ifndef _GPersonMinor_
#define _GPersonMinor_
//===============================================
#include "GPerson.h"
//===============================================
class GPersonMinor : public GPerson {
public:
    GPersonMinor();
    GPersonMinor(const string& name, const string& email);
    ~GPersonMinor();

public:
    void print() const;
};
//===============================================
#endif
//===============================================
