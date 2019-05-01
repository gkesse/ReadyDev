//===============================================
#include "GProcessPoint.h"
#include "GOpenGL.h"
//===============================================
GProcessPoint* GProcessPoint::m_instance = 0;
//===============================================
GProcessPoint::GProcessPoint() {

}
//===============================================
GProcessPoint::~GProcessPoint() {

}
//===============================================
GProcessPoint* GProcessPoint::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPoint;
    }
    return m_instance;
}
//===============================================
void GProcessPoint::run(int argc, char **argv) {
    GOpenGL::Instance()->init();
    GOpenGL::Instance()->createWindow(400, 400, "OpenGL | ReadyDev");
    GOpenGL::Instance()->setContext();
    GOpenGL::Instance()->setPointSmooth();
    GOpenGL::Instance()->setBlendAlpha();

    while(!GOpenGL::Instance()->getWindowClose()) {
        GOpenGL::Instance()->setViewPort();
        GOpenGL::Instance()->clear(GL_COLOR_BUFFER_BIT);
        GOpenGL::Instance()->setProjection();
        GOpenGL::Instance()->clear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);

        GVertex lVertex = {0.0, 0.0, 0.0};
        GColor lColor = {1.0, 0.0, 0.0, 1.0};

        GOpenGL::Instance()->drawPoint(lVertex, lColor, 30);

        GOpenGL::Instance()->swapBuffers();
        GOpenGL::Instance()->pollEvents();
    }

    GOpenGL::Instance()->destroyWindow();
    GOpenGL::Instance()->terminate();
}
//===============================================
