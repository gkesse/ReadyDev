//===============================================
#include "GDrawSDLBackground.h"
//===============================================
GDrawSDLBackground* GDrawSDLBackground::m_instance = 0;
//===============================================
GDrawSDLBackground::GDrawSDLBackground() {

}
//===============================================
GDrawSDLBackground::~GDrawSDLBackground() {

}
//===============================================
GDrawSDLBackground* GDrawSDLBackground::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLBackground;
    }
    return m_instance;
}
//===============================================
