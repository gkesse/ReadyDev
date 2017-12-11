//===============================================
#include "GHorizontal.h"
//===============================================
GHorizontal::GHorizontal() {
    m_window = 0;
}
//===============================================
GHorizontal::GHorizontal(GWindow* window) {
    m_window = window;
}
//===============================================
GHorizontal::~GHorizontal() {
    if(m_window != 0) {delete m_window; m_window = 0;}
}
//===============================================
string GHorizontal::getDescription() const {
    return m_window->getDescription() +
            "Decorator: Horizontal ScrollBar\n";
}
//===============================================
