//================================================
#include "GSingleton.h"
//================================================
GSingleton* GSingleton::m_instance = 0;
//================================================
GSingleton::GSingleton() {

}
//================================================
GSingleton::~GSingleton() {
	
}
//================================================
GSingleton* GSingleton::Instance() {
	if(m_instance == 0) {
        m_instance = new GSingleton;
	}
	return m_instance;
}
//================================================
void GSingleton::setData(const string& data) {
    m_data = data;
}
//================================================
void GSingleton::print() const {
    cout << "Je suis un singleton: " << m_data << "\n";
}
//================================================
