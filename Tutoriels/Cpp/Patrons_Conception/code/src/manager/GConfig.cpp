//================================================
#include "GConfig.h"
//================================================
GConfig* GConfig::m_instance = 0;
//================================================
GConfig::GConfig() {

}
//================================================
GConfig::~GConfig() {
	
}
//================================================
GConfig* GConfig::Instance() {
	if(m_instance == 0) {
		m_instance = new GConfig;
	}
	return m_instance;
}
//================================================
void GConfig::setData(const string& key, const string& data) {
    m_dataMap[key] = data;
}
//================================================
string GConfig::getData(const string& key) {
    return m_dataMap[key];
}
//================================================
void GConfig::showData() {
    for( map<string, string>::iterator lData = m_dataMap.begin(); lData != m_dataMap.end(); lData++) {
        std::cout << lData->first << " = " << lData->second << "\n";
    }
    cout << "\n";
}
//================================================
