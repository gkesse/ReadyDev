//===============================================
#include "GProcessMouseCallback.h"
#include "GVision.h"
#include "GMouse.h"
#include "GDraw.h"
#include "GConfig.h"
//===============================================
GProcessMouseCallback* GProcessMouseCallback::m_instance = 0;
int GProcessMouseCallback::m_mouseState = 0;
//===============================================
GProcessMouseCallback::GProcessMouseCallback() {

}
//===============================================
GProcessMouseCallback::~GProcessMouseCallback() {

}
//===============================================
GProcessMouseCallback* GProcessMouseCallback::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessMouseCallback;
    }
    return m_instance;
}
//===============================================
void GProcessMouseCallback::onMouse(int event, int x, int y, int flags, void *params) {
    GMouse::Instance()->callback(event, x, y);
}
//===============================================
void GProcessMouseCallback::run() {
    GVision::Instance()->showWindow("IMAGE");
    GVision::Instance()->createMouseCallback("IMAGE", onMouse);

    GVision::Instance()->loadImage("IMAGE", "res/img/fruits.jpg");

    while(1) {
        GVision::Instance()->copyImage("IMAGE", "DRAW");
        GConfig::Instance()->setData("DRAW", "BOX");
        GDraw::Instance()->draw("DRAW");
        GVision::Instance()->showImage("DRAW", "IMAGE");
        if(GVision::Instance()->waitKey(33) >= 0) break;
    }

    GVision::Instance()->destroyWindowAll();
}
//===============================================
