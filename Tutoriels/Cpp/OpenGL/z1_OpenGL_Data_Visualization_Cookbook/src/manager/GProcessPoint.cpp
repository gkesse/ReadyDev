//===============================================
#include "GProcessPoint.h"
#include "GOpenGL.h"
//===============================================
GProcessPoint* GProcessPoint::m_instance = 0;
//===============================================
struct sVertex {
    GLfloat x, y, z;
    GLfloat r, g, b, a;
};
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

    while(!GOpenGL::Instance()->getWindowClose()) {
        GOpenGL::Instance()->setViewPort();
        GOpenGL::Instance()->clearBuffer();
        GOpenGL::Instance()->setProjection();

        GVertex lVertex[] = {
            {-0.6, -0.4, 0.0},
            {0.6, -0.4, 0.0},
            {0.0, 0.6, 0.0}
        };
        GColor lColor[] = {
            {1.0, 0.0, 0.0, 0.0},
            {0.0, 1.0, 0.0, 0.0},
            {0.0, 0.0, 1.0, 0.0}
        };

        GOpenGL::Instance()->drawTriangle(lVertex, lColor);

        GOpenGL::Instance()->swapBuffers();
        GOpenGL::Instance()->getEvents();
    }

    GOpenGL::Instance()->destroyWindow();
    GOpenGL::Instance()->terminate();
}
//===============================================
