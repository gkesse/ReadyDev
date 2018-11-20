//===============================================
#include "GProcessMouse.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GMouse.h"
#include "GPrint.h"
//===============================================
GProcessMouse* GProcessMouse::m_instance = 0;
bool GProcessMouse::m_drawFlag;
cv::Rect GProcessMouse::m_drawBox;
bool GProcessMouse::m_drawCopyFlag;
//===============================================
GProcessMouse::GProcessMouse() {
    m_drawFlag = false;
    m_drawCopyFlag = false;
}
//===============================================
GProcessMouse::~GProcessMouse() {

}
//===============================================
GProcessMouse* GProcessMouse::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessMouse;
    }
    return m_instance;
}
//===============================================
void GProcessMouse::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lDrawImg;
    char lChar;

    GWindow::Instance()->create("OpenCV | ReadyDev");
    GImage::Instance()->create(lImg, 400, 400);
    GImage::Instance()->copy(lImg, lDrawImg);
    GMouse::Instance()->setCallback("OpenCV | ReadyDev", onMouse);

    while(1) {
        drawBox(lImg, lDrawImg);
        drawCopy(lDrawImg, lImg);
        GWindow::Instance()->show("OpenCV | ReadyDev", lDrawImg);
        GDelay::Instance()->delay(33, lChar);
        if(lChar >= 0) break;
    }

    GWindow::Instance()->destroyAll();
}
//===============================================
void GProcessMouse::onMouse(int event, int x, int y, int flags, void* params) {
    switch(event) {
    case cv::EVENT_LBUTTONDOWN:
        if(m_drawFlag == true) m_drawCopyFlag = true;
        m_drawFlag = !m_drawFlag;
        m_drawBox.x = x;
        m_drawBox.y = y;
        m_drawBox.width = 0;
        m_drawBox.height = 0;
        break;
    case cv::EVENT_MOUSEMOVE:
        if(m_drawFlag == false) break;
        m_drawBox.width = x - m_drawBox.x;
        m_drawBox.height = y - m_drawBox.y;
        break;
    }
}
//===============================================
void GProcessMouse::drawBox(const cv::Mat& src, cv::Mat& dst) {
    if(m_drawFlag == false) return;
    GImage::Instance()->copy(src, dst);
    GImage::Instance()->rectangle(dst, m_drawBox, cv::Scalar(0, 0, 255));
}
//===============================================
void GProcessMouse::drawCopy(const cv::Mat& src, cv::Mat& dst) {
    if(m_drawCopyFlag == false) return;
    GImage::Instance()->copy(src, dst);
    m_drawCopyFlag = false;
}
//===============================================
