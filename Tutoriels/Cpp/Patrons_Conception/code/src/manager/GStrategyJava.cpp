//================================================
#include "GStrategyJava.h"
//================================================
GStrategyJava* GStrategyJava::m_instance = 0;
//================================================
GStrategyJava::GStrategyJava() {

}
//================================================
GStrategyJava::~GStrategyJava() {
	
}
//===============================================
GStrategyJava* GStrategyJava::Instance() {
    if(m_instance == 0) {
        m_instance = new GStrategyJava;
    }
    return m_instance;
}
//================================================
void GStrategyJava::print() const {
    cout << "Je suis une strategie JAVA: " << m_name << "\n";
}
//================================================
