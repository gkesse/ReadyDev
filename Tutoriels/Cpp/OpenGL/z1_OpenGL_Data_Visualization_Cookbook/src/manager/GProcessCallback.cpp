//===============================================
#include "GProcessCallback.h"
#include "GOpenGL.h"
#include "GDraw.h"
#include "GData.h"
#include "GKeyboard.h"
//===============================================
GProcessCallback* GProcessCallback::m_instance = 0;
//===============================================
GProcessCallback::GProcessCallback() {

}
//===============================================
GProcessCallback::~GProcessCallback() {

}
//===============================================
GProcessCallback* GProcessCallback::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessCallback;
    }
    return m_instance;
}
//===============================================
void GProcessCallback::onKeyboard(GLFWwindow* window, int key, int scancode, int action, int mods) {
    GKeyboard::Instance()->onKeyboard(window, key, scancode, action, mods);
}
//===============================================
void GProcessCallback::onResize(GLFWwindow* window, int width, int height) {
    GOpenGL::Instance()->onResize(window, width, height);
}
//===============================================
void GProcessCallback::run(int argc, char **argv) {
    GOpenGL::Instance()->init();
    GOpenGL::Instance()->createWindow(400, 400, "OpenGL | ReadyDev");

    GOpenGL::Instance()->setOnKeyboard(onKeyboard);
    GOpenGL::Instance()->setOnResize(onResize);
    GOpenGL::Instance()->onResize();

    GOpenGL::Instance()->setContext();
    //GOpenGL::Instance()->swapInterval(1);

    GOpenGL::Instance()->setPointSmooth();
    GOpenGL::Instance()->setLineSmooth();
    GOpenGL::Instance()->setBlendAlpha();

    double lPhi = 0.0;

    while(!GOpenGL::Instance()->getWindowClose()) {
        GOpenGL::Instance()->clear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
        GOpenGL::Instance()->clearColor(0.0, 0.0, 0.0, 1.0);
        GOpenGL::Instance()->setModelView();

        GDraw::Instance()->setDivX(10.0, 20.0/1000.0);
        GDraw::Instance()->setDivY(8.0, 1.0);
        GDraw::Instance()->setDivS(0.1, 0.1);

        GColor lWhite = {1.0, 1.0, 1.0, 1.0};
        GColor lRed = {1.0, 0.0, 0.0, 1.0};
        GColor lGreen = {0.0, 1.0, 0.0, 1.0};

        GDraw::Instance()->drawGrid(5.0, 1.0, lWhite);
        GDraw::Instance()->drawAxis(5.0, 1.0, 5.0, lWhite);

        int nVertex;

        lPhi += 0.001;
        GVertex* lVertex = GData::Instance()->sinus(-20.0/1000, 20.0/1000, 1.0/1000, lPhi, &nVertex);
        GDraw::Instance()->drawLines2(lVertex, lGreen, 2, nVertex);
        GDraw::Instance()->drawPoints2(lVertex, lGreen, 10.0, nVertex);
        delete[] lVertex;

        if(GKeyboard::Instance()->isPressed()) {
            if(GKeyboard::Instance()->key() == GLFW_KEY_ESCAPE) {
                GOpenGL::Instance()->closeWindow();
            }
        }

        GOpenGL::Instance()->swapBuffers();
        GOpenGL::Instance()->pollEvents();
    }

    GOpenGL::Instance()->destroyWindow();
    GOpenGL::Instance()->terminate();
}
//===============================================
