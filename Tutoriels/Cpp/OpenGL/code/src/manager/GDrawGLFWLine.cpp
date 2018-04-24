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
    //glRotatef(lAngle, 0.0f, 0.0f, 1.0f);
}
//===============================================
void GDrawGLFWLine::draw() {
    for(float x = -5.0f; x < 5.0f; x += 0.1f) {
        GVertexInfo v1 = {x, -1.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f};
        GVertexInfo v2 = {x, 1.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f};
        float lWidth = 1.0f;
        if(x == 0) lWidth = 5.0f;
        drawLine(v1, v2, lWidth);
    }
    for(float y = -1.0f; y < 1.0f; y += 0.1f) {
        GVertexInfo v1 = {-5.0f, y, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f};
        GVertexInfo v2 = {5.0f, y, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f};
        drawLine(v1, v2);
    }
}
//===============================================
