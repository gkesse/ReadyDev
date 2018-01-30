//===============================================
#include "GCar.h"
#include "GWheel.h"
#include "GBody.h"
#include "GEngine.h"
//===============================================
GCar::GCar() {
    m_carItemMap.push_back(new GWheel("Front Left"));
    m_carItemMap.push_back(new GWheel("Front Right"));
    m_carItemMap.push_back(new GWheel("Back Left"));
    m_carItemMap.push_back(new GWheel("Back Right"));
    m_carItemMap.push_back(new GBody);
    m_carItemMap.push_back(new GEngine);
}
//===============================================
GCar::~GCar() {

}
//===============================================
vector<GCarItem*> GCar::getCarItemMap() const {
    return m_carItemMap;
}
//===============================================
