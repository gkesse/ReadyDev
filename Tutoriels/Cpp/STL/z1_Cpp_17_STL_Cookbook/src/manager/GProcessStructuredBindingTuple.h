//===============================================
#ifndef _GProcessStructuredBindingTuple_
#define _GProcessStructuredBindingTuple_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessStructuredBindingTuple : public GProcess {
public:
    GProcessStructuredBindingTuple();
    ~GProcessStructuredBindingTuple();

public:
    static GProcessStructuredBindingTuple* Instance();
    void run();
    tuple<int, int> divide(int dividend, int divisor);

private:
    static GProcessStructuredBindingTuple* m_instance;
};
//===============================================
#endif
//===============================================
