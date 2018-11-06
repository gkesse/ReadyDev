//===============================================
#ifndef _GProcessPromotedClass_
#define _GProcessPromotedClass_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessPromotedClass : public GProcess {
public:
    GProcessPromotedClass();
    ~GProcessPromotedClass();

public:
    static GProcessPromotedClass* Instance();
    void run();

private:
    static GProcessPromotedClass* m_instance;
};
//===============================================
#endif
//===============================================
