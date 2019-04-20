//===============================================
#include "GProcessGrid.h"
#include "GOpenGL.h"
#include "GDraw.h"
#include "GData.h"
//===============================================
GProcessGrid* GProcessGrid::m_instance = 0;
//===============================================
GProcessGrid::GProcessGrid() {

}
//===============================================
GProcessGrid::~GProcessGrid() {

}
//===============================================
GProcessGrid* GProcessGrid::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessGrid;
    }
    return m_instance;
}
//===============================================
void GProcessGrid::run(int argc, char **argv) {
    GOpenGL::Instance()->init();
    GOpenGL::Instance()->createWindow(400, 400, "OpenGL | ReadyDev");

    GOpenGL::Instance()->setContext();
    GOpenGL::Instance()->setPointSmooth();
    GOpenGL::Instance()->setLineSmooth();
    GOpenGL::Instance()->setBlendAlpha();

    double lPhi = 0.0;

    while(!GOpenGL::Instance()->getWindowClose()) {
        GOpenGL::Instance()->setViewPort();
        GOpenGL::Instance()->clearBuffer(GL_COLOR_BUFFER_BIT);
        GOpenGL::Instance()->setProjection();
        GOpenGL::Instance()->clearBuffer(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);

        GDraw::Instance()->setDivX(10.0, 20.0/1000.0);
        GDraw::Instance()->setDivY(8.0, 1.0);
        GDraw::Instance()->setDivS(0.1, 0.1);

        GColor lWhite = {1.0, 1.0, 1.0, 1.0};
        GColor lRed = {1.0, 0.0, 0.0, 1.0};
        GColor lGreen = {0.0, 1.0, 0.0, 1.0};

        GDraw::Instance()->drawGrid(5.0, 1.0, lWhite);
        GDraw::Instance()->drawAxis(5.0, 1.0, 5.0, lWhite);

        int lSize;

        lPhi += 0.001;
        GVertex* lVertex = GData::Instance()->sinus(-20.0/1000, 20.0/1000, 1.0/1000, lPhi, &lSize);
        GDraw::Instance()->drawLines(lVertex, lSize, lGreen, 2);
        GDraw::Instance()->drawPoints(lVertex, lSize, lGreen, 10.0);
        delete[] lVertex;

        GOpenGL::Instance()->swapBuffers();
        GOpenGL::Instance()->getEvents();
    }

    GOpenGL::Instance()->destroyWindow();
    GOpenGL::Instance()->terminate();
}
//===============================================
