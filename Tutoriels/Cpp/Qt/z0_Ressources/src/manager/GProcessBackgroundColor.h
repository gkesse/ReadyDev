//===============================================
#ifndef _GProcessBackgroundColor_
#define _GProcessBackgroundColor_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessBackgroundColor : public GProcess {
public:
    GProcessBackgroundColor();
    ~GProcessBackgroundColor();

public:
    static GProcessBackgroundColor* Instance();
    void run();

private:
    static GProcessBackgroundColor* m_instance;
};
//===============================================
#endif
//===============================================
