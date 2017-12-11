//===============================================
#ifndef _GCircle_
#define _GCircle_
//===============================================
#include "GShape.h"
#include "GDrawing.h"
//===============================================
class GCircle : public GShape {
public:
    GCircle();
    GCircle(GDrawing* drawing);
    ~GCircle();

public:
    void draw();

private:
    GDrawing* m_drawing;
};
//===============================================
#endif
//===============================================
