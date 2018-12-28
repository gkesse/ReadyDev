//================================================
#include "GVideoWriter.h"
#include "GPixel.h"
//================================================
#define degToRad(angleInDegrees) ((angleInDegrees) * M_PI / 180.0)
#define radToDeg(angleInRadians) ((angleInRadians) * 180.0 / M_PI)
//================================================
GVideoWriter* GVideoWriter::m_instance = 0;
//================================================
GVideoWriter::GVideoWriter() {

}
//================================================
GVideoWriter::~GVideoWriter() {

}
//================================================
GVideoWriter* GVideoWriter::Instance() {
    if(m_instance == 0) {
        m_instance = new GVideoWriter;
    }
    return m_instance;
}
//================================================
void GVideoWriter::open(cv::VideoWriter& writer, const string& name) {
    writer.open(name, CV_FOURCC('M','J','P','G'), 25, cv::Size(640, 480));
}
//================================================
void GVideoWriter::save(cv::VideoWriter& writer, const cv::Mat& img) {
    writer << img;
}
//================================================
void GVideoWriter::release(cv::VideoWriter& writer) {
    writer.release();
}
//================================================
