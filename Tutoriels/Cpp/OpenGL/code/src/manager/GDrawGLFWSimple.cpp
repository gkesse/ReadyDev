//===============================================
#include "GDrawGLFWSimple.h"
#include "GWindow.h"
#include "GCamera.h"
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
void GDrawGLFWSimple::updateDraw() {
    float lTime = glfwGetTime();
    float lAngle = lTime * 100.0f;
    glRotatef(lAngle, 0.0f, 0.0f, 1.0f);
}
//===============================================
void GDrawGLFWSimple::draw() {
    glBegin(GL_TRIANGLES);
    glColor3f(1.0f, 0.0f, 0.0f);
    glVertex3f(-0.6f, -0.4f, 0.0f);
    glColor3f(0.0f, 1.0f, 0.0f);
    glVertex3f(0.6f, -0.4f, 0.0f);
    glColor3f(0.0f, 0.0f, 1.0f);
    glVertex3f(0.0f, 0.6f, 0.0f);
    glEnd();
}
//===============================================
