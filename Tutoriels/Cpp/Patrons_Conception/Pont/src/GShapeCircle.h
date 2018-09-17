//===============================================
#ifndef _GShapeCircle_
#define _GShapeCircle_
//===============================================
#include "GShape.h"
//===============================================
class GShapeCircle : public GShape {
private:
    GShapeCircle();
    
public:
    ~GShapeCircle();
    
public:
    static GShapeCircle* Instance();
    void draw();
    
private:
    static GShapeCircle* m_instance;
};
//===============================================
#endif
//===============================================
