//===============================================
#include "GDrawGLFWLine.h"
#include "GCamera.h"
#include "GObjPoint.h"
//===============================================
#include <QtMath>
//===============================================
GDrawGLFWLine* GDrawGLFWLine::m_instance = 0;
//===============================================
GDrawGLFWLine::GDrawGLFWLine() {

}
//===============================================
GDrawGLFWLine::~GDrawGLFWLine() {

}
//===============================================
GDrawGLFWLine* GDrawGLFWLine::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawGLFWLine;
    }
    return m_instance;
}
//===============================================
void GDrawGLFWLine::initDraw() {

}
//===============================================
void GDrawGLFWLine::updateCamera(int width, int height) {
    GCamera::Instance()->update(width, height);
}
//===============================================
void GDrawGLFWLine::updateDraw() {
    float lTime = glfwGetTime();
    float lAngle = lTime * 100.0f;
    glRotatef(lAngle, 0.0f, 0.0f, 1.0f);
}
//===============================================
void GDrawGLFWLine::draw() {
    GObjPoint lObjPoint(9, 10, 8.0f);
}
//===============================================
