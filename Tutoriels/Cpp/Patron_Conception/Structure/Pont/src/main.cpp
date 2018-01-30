//===============================================
#include "GShape.h"
#include "GCircle.h"
#include "GDrawingOSX.h"
#include "GDrawingWin.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GShape> m_circleOSX(new GCircle(new GDrawingOSX));
    shared_ptr<GShape> m_circleWin(new GCircle(new GDrawingWin));
    m_circleOSX->draw();
    m_circleWin->draw();
    return 0;
}
//===============================================
