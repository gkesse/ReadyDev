//===============================================
#include "GDrawGLFWPoint.h"
#include "GCamera.h"
//===============================================
#include <QtMath>
//===============================================
GDrawGLFWPoint* GDrawGLFWPoint::m_instance = 0;
//===============================================
GDrawGLFWPoint::GDrawGLFWPoint() {

}
//===============================================
GDrawGLFWPoint::~GDrawGLFWPoint() {

}
//===============================================
GDrawGLFWPoint* GDrawGLFWPoint::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawGLFWPoint;
    }
    return m_instance;
}
//===============================================
void GDrawGLFWPoint::initDraw() {

}
//===============================================
void GDrawGLFWPoint::updateCamera(int width, int height) {
    GCamera::Instance()->update(width, height);
}
//===============================================
void GDrawGLFWPoint::updateDraw() {
    float lTime = glfwGetTime();
    float lAngle = lTime * 100.0f;
    glRotatef(lAngle, 0.0f, 0.0f, 1.0f);
}
//===============================================
void GDrawGLFWPoint::draw() {
    int lUmax = 9;
    int lRmax = 9;
    float lPointSize = 10.0f;
    float du = 360.0f/lUmax;
    float dr = 0.95f/lRmax;
    for(int i = 0; i < lUmax; i++) {
        for(int j = 0; j < lRmax; j++) {
            if(j == 0 && i != 0) continue;
            float u = i*du;
            float uRad = u*M_PI/180;
            float r = j*dr;
            float x = r*qCos(uRad);
            float y = r*qSin(uRad);
            float lRed = ((i % 3) == 0) ? 1.0f : 0.0f;
            float lGreen = ((i % 3) == 1) ? 1.0f : 0.0f;
            float lBlue = ((i % 3) == 2) ? 1.0f : 0.0f;
            GVertexInfo lVertex = {x, y, 0.0f, lRed, lGreen, lBlue, 1.0f};
            setAntiAliasing();
            glPointSize(lPointSize);
            glBegin(GL_POINTS);
            glColor3f(lVertex.r, lVertex.g, lVertex.b);
            glVertex3f(lVertex.x, lVertex.y, lVertex.z);
            glEnd();
        }
    }
}
//===============================================
