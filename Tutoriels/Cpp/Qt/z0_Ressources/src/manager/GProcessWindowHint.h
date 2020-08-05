//===============================================
#ifndef _GProcessWindowHint_
#define _GProcessWindowHint_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessWindowHint : public GProcess {
public:
    GProcessWindowHint();
    ~GProcessWindowHint();

public:
    static GProcessWindowHint* Instance();
    void run();

private:
    static GProcessWindowHint* m_instance;
};
//===============================================
#endif
//===============================================
