//================================================
#include "GDelay.h"
//================================================
GDelay* GDelay::m_instance = 0;
//================================================
GDelay::GDelay() {

}
//================================================
GDelay::~GDelay() {
	
}
//================================================
GDelay* GDelay::Instance() {
	if(m_instance == 0) {
        m_instance = new GDelay;
	}
	return m_instance;
}
//================================================
void GDelay::loop() {
    cv::waitKey(0);
}
//================================================
void GDelay::delay(const int& ms, char& c) {
    c = cv::waitKey(ms);
}
//================================================