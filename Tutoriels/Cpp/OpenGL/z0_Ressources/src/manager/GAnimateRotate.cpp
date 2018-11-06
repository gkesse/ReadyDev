//================================================
#include "GAnimateRotate.h"
//================================================
GAnimateRotate* GAnimateRotate::m_instance = 0;
//================================================
GAnimateRotate::GAnimateRotate() {

}
//================================================
GAnimateRotate::~GAnimateRotate() {
	
}
//================================================
GAnimateRotate* GAnimateRotate::Instance() {
    if(m_instance == 0) {
        m_instance = new GAnimateRotate;
    }
    return m_instance;
}
//================================================
void GAnimateRotate::animate() {
    glRotatef((float)glfwGetTime() * 50.f, 0.f, 0.f, 1.f);
}
//================================================
