//===============================================
#include "GCareTaker.h"
//===============================================
GCareTaker::GCareTaker() {

}
//===============================================
GCareTaker::~GCareTaker() {

}
//===============================================
void GCareTaker::addMomento(GMomento* momento) {
    m_momentoMap.push_back(momento);
}
//===============================================
GMomento* GCareTaker::getMomento(const int& index) {
    return m_momentoMap[index];
}
//===============================================
