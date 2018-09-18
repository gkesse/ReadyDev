//===============================================
#include "GDrawFill.h"
//===============================================
GDrawFill* GDrawFill::m_instance = 0;
//===============================================
GDrawFill::GDrawFill() {

}
//===============================================
GDrawFill::~GDrawFill() {
    
}
//===============================================
GDrawFill* GDrawFill::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawFill;
    }
    return m_instance;
} 
//===============================================
void GDrawFill::drawCircle() {
    cout << "Dessiner un cercle avec remplissage\n";
} 
//===============================================
