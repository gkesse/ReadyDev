//===============================================
#include "GProcessSettingPixel.h"
#include "GVision.h"
#include "GDraw.h"
#include "GConfig.h"
//===============================================
GProcessSettingPixel* GProcessSettingPixel::m_instance = 0;
//===============================================
GProcessSettingPixel::GProcessSettingPixel() {

}
//===============================================
GProcessSettingPixel::~GProcessSettingPixel() {

}
//===============================================
GProcessSettingPixel* GProcessSettingPixel::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSettingPixel;
    }
    return m_instance;
}
//===============================================
void GProcessSettingPixel::run() {
    GVision::Instance()->showWindow("IMAGE");
    GVision::Instance()->showWindow("GRAY");

    GVision::Instance()->loadImage("IMAGE", "res/img/fruits.jpg");
    GVision::Instance()->convertImage("IMAGE", "GRAY", cv::COLOR_BGR2GRAY);
    GConfig::Instance()->setData("DRAW", "RGB");
    GDraw::Instance()->cercle("IMAGE", 200, 200, 100, 255, 0, 0);
    GConfig::Instance()->setData("DRAW", "GRAY");
    GDraw::Instance()->cercle("GRAY", 200, 200, 100, 0);

    GVision::Instance()->showImage("IMAGE", "IMAGE");
    GVision::Instance()->showImage("GRAY", "GRAY");

    GVision::Instance()->waitKey(0);
    GVision::Instance()->destroyWindowAll();
}
//===============================================
