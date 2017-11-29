//===============================================
#ifndef _GData_
#define _GData_
//===============================================
#include "GObservable.h"
//===============================================
class GData : public GObservable {
public:
    GData();
    ~GData();

public:
    void setData(const string& data);
};
//===============================================
#endif
//===============================================
