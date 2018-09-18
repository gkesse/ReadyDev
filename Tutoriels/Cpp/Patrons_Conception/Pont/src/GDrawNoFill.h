//===============================================
#ifndef _GDrawNoFill_
#define _GDrawNoFill_
//===============================================
#include "GDraw.h"
//===============================================
class GDrawNoFill : public GDraw {
private:
    GDrawNoFill();
    
public:
    ~GDrawNoFill();
    
public:
    static GDrawNoFill* Instance();
    void drawCircle();
    
private:
    static GDrawNoFill* m_instance;
};
//===============================================
#endif
//===============================================
