//===============================================
#include "GShape.h"
#include "GDraw.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Patron Pont\n\n";
    GConfig::Instance()->setData("SHAPE", "CIRCLE");
    GConfig::Instance()->setData("DRAW", "NO_FILL");
    GShape::Instance()->setDraw(GDraw::Instance());
    GShape::Instance()->draw();
    
    GConfig::Instance()->setData("SHAPE", "CIRCLE");
    GConfig::Instance()->setData("DRAW", "FILL");
    GShape::Instance()->setDraw(GDraw::Instance());
    GShape::Instance()->draw();
    return 0;
}
//===============================================
