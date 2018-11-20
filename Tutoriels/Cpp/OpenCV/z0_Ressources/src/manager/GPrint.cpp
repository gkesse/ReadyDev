//================================================
#include "GPrint.h"
//================================================
GPrint* GPrint::m_instance = 0;
//================================================
GPrint::GPrint() {

}
//================================================
GPrint::~GPrint() {

}
//================================================
GPrint* GPrint::Instance() {
    if(m_instance == 0) {
        m_instance = new GPrint;
    }
    return m_instance;
}
//================================================
void GPrint::print(const string& data, const string& name) {
    if(!name.empty()) cout << name << " : ";
    cout << data << "\n";
}
//================================================
void GPrint::print(const double& data, const string& name) {
    if(!name.empty()) cout << name << " : ";
    cout << data << "\n";
}
//================================================
void GPrint::print(const char* data, const string& name) {
    if(!name.empty()) cout << name << " : ";
    cout << data << "\n";
}
//================================================
void GPrint::print(const cv::Mat& data, const string& name) {
    if(!name.empty()) cout << name << " : ";
    cout << data << "\n";
}
//================================================
