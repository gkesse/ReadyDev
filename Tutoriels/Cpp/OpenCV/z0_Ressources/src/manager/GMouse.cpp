//================================================
#include "GMouse.h"
//================================================
GMouse* GMouse::m_instance = 0;
//================================================
GMouse::GMouse() {

}
//================================================
GMouse::~GMouse() {

}
//================================================
GMouse* GMouse::Instance() {
    if(m_instance == 0) {
        m_instance = new GMouse;
    }
    return m_instance;
}
//================================================
void GMouse::setCallback(const string& title, cv::MouseCallback onMouse, void* params) {
    cv::setMouseCallback(title, onMouse, params);
}
//================================================
