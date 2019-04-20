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
double GMath::sinus(const double& time, const double& vmax, const double &freq, const double& phi) {
    double lOmega = 2*M_PI*freq;
    double lPhase = lOmega*time + phi;
    double lData = vmax*sin(lPhase);
    return lData;
}
//================================================
