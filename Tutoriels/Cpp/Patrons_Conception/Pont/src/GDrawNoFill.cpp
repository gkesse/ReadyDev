//===============================================
#include "GDrawNoFill.h"
//===============================================
GDrawNoFill* GDrawNoFill::m_instance = 0;
//===============================================
GDrawNoFill::GDrawNoFill() {

}
//===============================================
GDrawNoFill::~GDrawNoFill() {
    
}
//===============================================
GDrawNoFill* GDrawNoFill::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawNoFill;
    }
    return m_instance;
} 
//===============================================
void GDrawNoFill::drawCircle() {
    cout << "Dessiner un cercle sans remplissage\n";
} 
//===============================================
