//===============================================
#include "GProcessPixel.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GConvert.h"
#include "GCircle.h"
//===============================================
GProcessPixel* GProcessPixel::m_instance = 0;
//===============================================
GProcessPixel::GProcessPixel() {

}
//===============================================
GProcessPixel::~GProcessPixel() {

}
//===============================================
GProcessPixel* GProcessPixel::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPixel;
    }
    return m_instance;
}
//===============================================
void GProcessPixel::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lGrayImg;
    int lCenterX;
    int lCenterY;
    int lRadius;

    GWindow::Instance()->create("OpenCV | ReadyDev");
    GWindow::Instance()->create("OpenCV | ReadyDev | Gray");

    GImage::Instance()->load("res/img/fruits.jpg", lImg);
    GConvert::Instance()->convert(lImg, lGrayImg, cv::COLOR_BGR2GRAY);
    GImage::Instance()->center(lImg, lCenterX, lCenterY);
    lRadius = min(lCenterX, lCenterY) - 10;
    GCircle::Instance()->draw(lImg, lCenterX, lCenterY, lRadius, 255, 255, 255);
    GCircle::Instance()->draw(lGrayImg, lCenterX, lCenterY, lRadius, 255);

    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GWindow::Instance()->show("OpenCV | ReadyDev | Gray", lGrayImg);

    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
