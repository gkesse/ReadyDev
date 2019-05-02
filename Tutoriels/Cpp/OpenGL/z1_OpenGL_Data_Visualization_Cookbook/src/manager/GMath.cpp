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
double GMath::rad(const double& deg) {
    double lRad = (deg * M_PI) / 180.0;
    return lRad;
}
//================================================
double GMath::deg(const double& rad) {
    double lDeg = (rad * 180.0) / M_PI;
    return lDeg;
}
//================================================
double GMath::sinus(const double& time, const double& vmax, const double &freq, const double& phi) {
    double lOmega = 2*M_PI*freq;
    double lPhase = lOmega*time + phi;
    double lData = vmax*sin(lPhase);
    return lData;
}
//================================================
