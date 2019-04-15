//===============================================
#include "GProcessLine.h"
#include "GOpenGL.h"
//===============================================
GProcessLine* GProcessLine::m_instance = 0;
//===============================================
GProcessLine::GProcessLine() {

}
//===============================================
GProcessLine::~GProcessLine() {

}
//===============================================
GProcessLine* GProcessLine::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessLine;
    }
    return m_instance;
}
//===============================================
void GProcessLine::run(int argc, char **argv) {
    GOpenGL::Instance()->init();
    GOpenGL::Instance()->createWindow(400, 400, "OpenGL | ReadyDev");
    GOpenGL::Instance()->setContext();
    GOpenGL::Instance()->setPointSmooth();
    GOpenGL::Instance()->setLineSmooth();
    GOpenGL::Instance()->setBlendAlpha();

    while(!GOpenGL::Instance()->getWindowClose()) {
        GOpenGL::Instance()->setViewPort();
        GOpenGL::Instance()->clearBuffer(GL_COLOR_BUFFER_BIT);
        GOpenGL::Instance()->setProjection();
        GOpenGL::Instance()->clearBuffer(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);

        GVertex lVertex[] = {
            {0.0, 0.0, 0.0},
            {1.0, 1.0, 0.0}
        };
        GColor lColor[] = {
            {1.0, 0.0, 0.0, 1.0},
            {0.0, 1.0, 0.0, 1.0}
        };

        GOpenGL::Instance()->drawLine(lVertex, lColor, 10);

        GOpenGL::Instance()->swapBuffers();
        GOpenGL::Instance()->getEvents();
    }

    GOpenGL::Instance()->destroyWindow();
    GOpenGL::Instance()->terminate();
}
//===============================================
