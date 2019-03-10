//================================================
#include "GMath.h"
//================================================
GMath* GMath::m_instance = 0;
//================================================
GMath::GMath() {

}
//================================================
GMath::~GMath() {
	
}
//================================================
GMath* GMath::Instance() {
	if(m_instance == 0) {
        m_instance = new GMath;
	}
	return m_instance;
}
//================================================
double GMath::degreeToRadian(const double& degree) {
    double lRad = (degree * M_PI) / 180.0;
    return lRad;
}
//===============================================
double GMath::radianToDegree(const double& radian) {
    double lDeg = (radian * 180.0) / M_PI;
    return lDeg;
}
//===============================================
