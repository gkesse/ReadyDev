//===============================================
#include "GCamera.h"
//===============================================
GCamera* GCamera::m_instance = 0;
//===============================================
GCamera::GCamera() {

}
//===============================================
GCamera::~GCamera() {

}
//===============================================
GCamera* GCamera::Instance() {
    if(m_instance == 0) {
        m_instance = new GCamera;
    }
    return m_instance;
}
//===============================================
void GCamera::update(int width, int height) {
    updateViewport(width, height);
    updateOrtho(width, height);
}
//===============================================
void GCamera::updateViewport(int width, int height) {
    glViewport(0, 0, width, height);
}
//===============================================
void GCamera::updateOrtho(int width, int height) {
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    float lRatio = (float)width/height;
    float lLeft = -lRatio;
    float lRight = lRatio;
    float lBottom = -1.0f;
    float lTop = 1.0f;
    float lZNear = -1.0f;
    float lZFar = 1.0f;
    glOrtho(lLeft, lRight, lBottom, lTop, lZNear, lZFar);
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();
}
//===============================================
