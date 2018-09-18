//===============================================
#include "GShape.h"
#include "GShapeCircle.h"
#include "GConfig.h"
//===============================================
GShape::GShape() {

}
//===============================================
GShape::~GShape() {
    
}
//===============================================
GShape* GShape::Instance() {
    string lDraw = GConfig::Instance()->getData("SHAPE");
    if(lDraw == "CIRCLE") return GShapeCircle::Instance();
    return GShapeCircle::Instance();
} 
//===============================================
void GShape::setDraw(GDraw* draw) {
    m_draw = draw;
} 
//===============================================
