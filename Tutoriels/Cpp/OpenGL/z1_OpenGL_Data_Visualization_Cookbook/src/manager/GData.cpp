//================================================
#include "GData.h"
#include "GMath.h"
//================================================
GData* GData::m_instance = 0;
//================================================
GData::GData() {

}
//================================================
GData::~GData() {
	
}
//================================================
GData* GData::Instance() {
	if(m_instance == 0) {
        m_instance = new GData;
	}
	return m_instance;
}
//================================================
GVertex* GData::sinus(const double& tmin, const double& tmax, const double& dt, const double& phi, int* size) {
    int i = 0;
    *size = (int)((tmax - tmin) / dt + 1);
    GVertex* lVertex = new GVertex[*size];

    for(double time = tmin; time <= tmax + dt; time += dt) {
        double lData = GMath::Instance()->sinus(time, 1.0, 50.0, phi);
        lVertex[i] = {time, lData, 0.0};
        i++;
    }
    return lVertex;
}
//================================================
