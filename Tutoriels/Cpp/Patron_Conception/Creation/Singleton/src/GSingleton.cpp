//===============================================
#include "GSingleton.h"
//===============================================
GSingleton* GSingleton::m_instance = 0;
//===============================================
GSingleton::GSingleton() {
    m_data = "_NO_DATA_";
}
//===============================================
GSingleton::~GSingleton() {

}
//===============================================
GSingleton* GSingleton::Instance() {
    if(m_instance == 0) {
        m_instance = new GSingleton;
    }
    return m_instance;
}
//===============================================
void GSingleton::setData(const string& data) {
    m_data = data;
}
//===============================================
string GSingleton::getData() const {
    return m_data;
}
//===============================================
void GSingleton::showData() const {
    cout << m_data << "\n";
}
//===============================================
