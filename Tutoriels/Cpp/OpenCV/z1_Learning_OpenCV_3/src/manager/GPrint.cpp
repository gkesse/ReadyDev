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
void GPrint::print(const int& data, const string &name) {
    if(name != "") cout << name << ": ";
    cout << data << "\n";
}
//================================================
void GPrint::print(const double& data, const string &name) {
    if(name != "") cout << name << ": ";
    cout << data << "\n";
}
//================================================
void GPrint::print(const string& data, const string &name) {
    if(name != "") cout << name << ": ";
    cout << data << "\n";
}
//================================================
void GPrint::print(const vector<string>& data, const string &name) {
    if(name != "") cout << name << ": ";
    for(int i = 0; i < data.size(); i++) {
        if(i != 0) cout << " | ";
        string lData = data[i];
        cout << lData;
    }
    cout << "\n";
}
//================================================
void GPrint::print(map<string, string> data, const string &name) {
    if(name != "") cout << name << ":\n";
    for(map<string, string>::iterator item = data.begin(); item != data.end(); item++) {
        cout << item->first << ": " << item->second << "\n";
    }
    cout << "\n";
}
//================================================
void GPrint::print(const cv::Mat& data, const string &name) {
    if(name != "") cout << name << ":\n";
    cout << data << "\n";
}
//===============================================