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
string GConfig::getData(const string &key) {
    return m_dataMap[key];
}
//===============================================
void GConfig::show() {
    map<string, string>::iterator lItem;
    for(lItem = m_dataMap.begin(); lItem != m_dataMap.end(); lItem++) {
        cout << lItem->first << " = " << lItem->second << "\n";
    }
    cout << "\n";
}
//===============================================
