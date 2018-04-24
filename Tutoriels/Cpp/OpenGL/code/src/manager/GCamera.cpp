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
void GCamera::update(int witdh, int height) {
    initCamera(witdh, height);
    updateViewport();
    updateMVP();
}
//===============================================
void GCamera::initCamera(int witdh, int height) {
    m_width = witdh;
    m_height = height;
    m_ratio = (float)m_width/m_height;
}
//===============================================
void GCamera::updateViewport() {
    glViewport(0, 0, m_width, m_height);
}
//===============================================
void GCamera::updateMVP() {
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    float lLeft = -m_ratio;
    float lRight = m_ratio;
    float lBottom = -1.0f;
    float lTop = 1.0f;
    float lZNear = -1.0f;
    float lZFar = 1.0f;
    glOrtho(lLeft, lRight, lBottom, lTop, lZNear, lZFar);
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();
}
//===============================================
