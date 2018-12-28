//===============================================
#include "GProcessVideoWrite.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GVideo.h"
#include "GVideoWriter.h"
//===============================================
GProcessVideoWrite* GProcessVideoWrite::m_instance = 0;
//===============================================
GProcessVideoWrite::GProcessVideoWrite() {

}
//===============================================
GProcessVideoWrite::~GProcessVideoWrite() {

}
//===============================================
GProcessVideoWrite* GProcessVideoWrite::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessVideoWrite;
    }
    return m_instance;
}
//===============================================
void GProcessVideoWrite::run(int argc, char** argv) {
    cv::VideoCapture lCap;
    cv::VideoWriter lWriter;
    cv::Mat lImg;
    char lChar;

    GVideo::Instance()->open(0, lCap);
    GWindow::Instance()->create("OpenCV | ReadyDev");
    GVideoWriter::Instance()->open(lWriter, "res/video/save.avi");

    while(1) {
        GVideo::Instance()->image(lCap, lImg);
        if(lImg.empty()) break;
        GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
        GVideoWriter::Instance()->save(lWriter, lImg);
        GDelay::Instance()->delay(33, lChar);
        if(lChar >= 0) break;
    }

    GVideoWriter::Instance()->release(lWriter);
    GVideo::Instance()->relase(lCap);
    GWindow::Instance()->destroyAll();
}
//===============================================
