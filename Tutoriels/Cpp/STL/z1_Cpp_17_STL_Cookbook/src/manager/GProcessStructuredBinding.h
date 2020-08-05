//===============================================
#ifndef _GProcessStructuredBinding_
#define _GProcessStructuredBinding_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessStructuredBinding : public GProcess {
public:
    GProcessStructuredBinding();
    ~GProcessStructuredBinding();

public:
    static GProcessStructuredBinding* Instance();
    void run();
    pair<int, int> divide(int dividend, int divisor);

private:
    static GProcessStructuredBinding* m_instance;
};
//===============================================
#endif
//===============================================
