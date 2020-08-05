//================================================
#include "GStrategyPython.h"
//================================================
GStrategyPython* GStrategyPython::m_instance = 0;
//================================================
GStrategyPython::GStrategyPython() {

}
//================================================
GStrategyPython::~GStrategyPython() {

}
//===============================================
GStrategyPython* GStrategyPython::Instance() {
    if(m_instance == 0) {
        m_instance = new GStrategyPython;
    }
    return m_instance;
}
//================================================
void GStrategyPython::print() const {
    cout << "Je suis une strategie PYTHON: " << m_name << "\n";
}
//================================================
