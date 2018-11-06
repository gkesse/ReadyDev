//================================================
#include "GAntiAliasingEnable.h"
//================================================
GAntiAliasingEnable* GAntiAliasingEnable::m_instance = 0;
//================================================
GAntiAliasingEnable::GAntiAliasingEnable() {

}
//================================================
GAntiAliasingEnable::~GAntiAliasingEnable() {
	
}
//================================================
GAntiAliasingEnable* GAntiAliasingEnable::Instance() {
    if(m_instance == 0) {
        m_instance = new GAntiAliasingEnable;
    }
    return m_instance;
}
//================================================
void GAntiAliasingEnable::enable() {
    glEnable(GL_POINT_SMOOTH);
    glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);

    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);
}
//================================================
