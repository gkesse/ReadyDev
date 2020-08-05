//===============================================
#include "GConfigNormal.h"
//===============================================
GConfigNormal* GConfigNormal::m_instance = 0;
//===============================================
GConfigNormal::GConfigNormal() {

}
//===============================================
GConfigNormal::~GConfigNormal() {

}
//===============================================
GConfigNormal* GConfigNormal::Instance() {
    if(m_instance == 0) {
        m_instance = new GConfigNormal;
    }
    return m_instance;
}
//===============================================
void GConfigNormal::setData(const string& key, const string& value) {
    m_dataMap[key] = value;
}
//===============================================
string GConfigNormal::getData(const string& key) {
    return m_dataMap[key];
}
//===============================================
void GConfigNormal::show() {
    map<string, string>::iterator lItem;
    for(lItem = m_dataMap.begin(); lItem != m_dataMap.end(); lItem++) {
        cout << lItem->first << " = " << lItem->second << "\n";
    }
    cout << "\n";
}
//===============================================
void GConfigNormal::remove(const string& key) {
    map<string, string>::iterator lItem = m_dataMap.find(key) ;
    if(lItem != m_dataMap.end()) {
        m_dataMap.erase(lItem);
    }
}
//===============================================
void GConfigNormal::clear() {
    m_dataMap.clear();
}
//===============================================
