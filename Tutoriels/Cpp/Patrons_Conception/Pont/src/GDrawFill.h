//===============================================
#ifndef _GDrawFill_
#define _GDrawFill_
//===============================================
#include "GDraw.h"
//===============================================
class GDrawFill : public GDraw {
private:
    GDrawFill();
    
public:
    ~GDrawFill();
    
public:
    static GDrawFill* Instance();
    void drawCircle();
    
private:
    static GDrawFill* m_instance;
};
//===============================================
#endif
//===============================================
