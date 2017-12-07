//===============================================
#include "GOriginator.h"
//===============================================
GOriginator::GOriginator() {

}
//===============================================
GOriginator::~GOriginator() {

}
//===============================================
void GOriginator::setState(const string& state) {
    m_state = state;
    cout << "Originator : Set State : ";
    cout << m_state << "\n";
}
//===============================================
GMomento* GOriginator::saveToMomemto() {
    cout << "Originator : Save To Momento : ";
    cout << m_state << "\n";
    return new GMomento(m_state);
}
//===============================================
void GOriginator::restoreFromMomemto(GMomento* momemto) {
    m_state = momemto->getState();
    cout << "Originator : Restore From Momento : ";
    cout << m_state << "\n";
}
//===============================================
