//===============================================
#include "GVertical.h"
//===============================================
GVertical::GVertical() {
    m_window = 0;
}
//===============================================
GVertical::GVertical(GWindow* window) {
    m_window = window;
}
//===============================================
GVertical::~GVertical() {
    if(m_window != 0) {delete m_window; m_window = 0;}
}
//===============================================
string GVertical::getDescription() const {
    return m_window->getDescription() +
            "Decorator: Vertical ScrollBar\n";
}
//===============================================
