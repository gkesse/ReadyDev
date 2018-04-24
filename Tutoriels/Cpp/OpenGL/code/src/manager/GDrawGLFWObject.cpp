//===============================================
#include "GDrawGLFWObject.h"
#include "GCamera.h"
#include "GObjPoint.h"
//===============================================
#include <QtMath>
//===============================================
GDrawGLFWObject* GDrawGLFWObject::m_instance = 0;
//===============================================
GDrawGLFWObject::GDrawGLFWObject() {

}
//===============================================
GDrawGLFWObject::~GDrawGLFWObject() {

}
//===============================================
GDrawGLFWObject* GDrawGLFWObject::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawGLFWObject;
    }
    return m_instance;
}
//===============================================
void GDrawGLFWObject::initDraw() {

}
//===============================================
void GDrawGLFWObject::updateCamera(int width, int height) {
    GCamera::Instance()->update(width, height);
}
//===============================================
void GDrawGLFWObject::updateDraw() {
    float lTime = glfwGetTime();
    float lAngle = lTime * 100.0f;
    glRotatef(lAngle, 0.0f, 0.0f, 1.0f);
}
//===============================================
void GDrawGLFWObject::draw() {
    GObjPoint lObjPoint(9, 10, 8.0f);
}
//===============================================
