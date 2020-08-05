//================================================
#include "GDrawBackground.h"
//================================================
GDrawBackground* GDrawBackground::m_instance = 0;
//================================================
GDrawBackground::GDrawBackground() {

}
//================================================
GDrawBackground::~GDrawBackground() {

}
//================================================
GDrawBackground* GDrawBackground::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawBackground;
    }
    return m_instance;
}
//================================================
