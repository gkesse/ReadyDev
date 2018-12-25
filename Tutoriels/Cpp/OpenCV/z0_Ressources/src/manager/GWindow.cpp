//================================================
#include "GWindow.h"
//================================================
GWindow* GWindow::m_instance = 0;
//================================================
GWindow::GWindow() {

}
//================================================
GWindow::~GWindow() {
	
}
//================================================
GWindow* GWindow::Instance() {
	if(m_instance == 0) {
        m_instance = new GWindow;
	}
	return m_instance;
}
//================================================
void GWindow::create(const string& name, const int& flags) {
    cv::namedWindow(name, flags);
}
//================================================
void GWindow::show(const string& name, cv::Mat& img) {
    cv::imshow(name, img);
}
//================================================
void GWindow::resize(const string& name, const int& w, const int& h) {
    cv::resizeWindow(name, w, h);
}
//================================================
void GWindow::destroy(const string& name) {
    cv::destroyWindow(name);
}
//================================================
void GWindow::destroyAll() {
    cv::destroyAllWindows();
}
//================================================
