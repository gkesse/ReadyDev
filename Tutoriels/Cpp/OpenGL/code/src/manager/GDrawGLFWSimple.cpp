//===============================================
#include "GDrawGLFWSimple.h"
//===============================================
GDrawGLFWSimple* GDrawGLFWSimple::m_instance = 0;
//===============================================
GDrawGLFWSimple::GDrawGLFWSimple() {

}
//===============================================
GDrawGLFWSimple::~GDrawGLFWSimple() {

}
//===============================================
GDrawGLFWSimple* GDrawGLFWSimple::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawGLFWSimple;
    }
    return m_instance;
}
//===============================================
void GDrawGLFWSimple::draw() {
    cout << "kkkkkkkkkkkkkkkkkkk\n";
    glBegin(GL_TRIANGLES);
    glColor3f(1.f, 0.f, 0.f);
    glVertex3f(-0.6f, -0.4f, 0.f);
    glColor3f(0.f, 1.f, 0.f);
    glVertex3f(0.6f, -0.4f, 0.f);
    glColor3f(0.f, 0.f, 1.f);
    glVertex3f(0.f, 0.6f, 0.f);
    glEnd();
}
//===============================================
