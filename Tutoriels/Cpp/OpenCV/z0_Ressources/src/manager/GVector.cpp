//================================================
#include "GVector.h"
//================================================
GVector* GVector::m_instance = 0;
//================================================
GVector::GVector() {

}
//================================================
GVector::~GVector() {

}
//================================================
GVector* GVector::Instance() {
    if(m_instance == 0) {
        m_instance = new GVector;
    }
    return m_instance;
}
//================================================
void GVector::set(vector<double>& dataMap, double* dataList, const int& size) {
    for(int i = 0; i < size; i++) {
        dataMap.push_back(dataList[i]);
    }
}
//================================================
