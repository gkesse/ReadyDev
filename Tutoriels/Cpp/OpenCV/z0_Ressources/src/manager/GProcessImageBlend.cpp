//===============================================
#include "GProcessImageBlend.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GBlend.h"
#include "GRoi.h"
#include "GPrint.h"
//===============================================
GProcessImageBlend* GProcessImageBlend::m_instance = 0;
//===============================================
GProcessImageBlend::GProcessImageBlend() {

}
//===============================================
GProcessImageBlend::~GProcessImageBlend() {

}
//===============================================
GProcessImageBlend* GProcessImageBlend::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImageBlend;
    }
    return m_instance;
}
//===============================================
void GProcessImageBlend::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lLogoImg;
    cv::Mat lImgRoi;
    cv::Mat lLogoRoi;
    int lImgX;
    int lImgY;
    int lImgW;
    int lImgH;
    int lLogoW;
    int lLogoH;

    GWindow::Instance()->create("OpenCV | ReadyDev");

    GImage::Instance()->load("res/img/fruits.png", lImg);
    GImage::Instance()->load("res/img/logo.png", lLogoImg);
    GImage::Instance()->size(lImg, lImgW, lImgH);
    GImage::Instance()->size(lLogoImg, lLogoW, lLogoH);
    lImgX = lImgW - lLogoW - 10;
    lImgY = lImgH - lLogoH - 10;
    GRoi::Instance()->roi(lImg, lImgRoi, lImgX, lImgY, lLogoW, lLogoH);
    GRoi::Instance()->roi(lLogoImg, lLogoRoi, 0, 0, lLogoW, lLogoH);

    GPrint::Instance()->print(lImgRoi.size().width);
    GPrint::Instance()->print(lImgRoi.size().height);
    GPrint::Instance()->print(lLogoRoi.size().width);
    GPrint::Instance()->print(lLogoRoi.size().height);

    GBlend::Instance()->blend(lLogoRoi, 1.0, lImgRoi, 0.0, lImgRoi);

    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);

    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
