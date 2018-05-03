//===============================================
#include "GWindow.h"
#include "GWindowSDL.h"
#include "GWindowGLUT.h"
#include "GWindowQt.h"
#include "GWindowGLFW.h"
#include "GDraw.h"
#include "GConfig.h"
//===============================================
GWindow::GWindow() {

}
//===============================================
GWindow::~GWindow() {

}
//===============================================
GWindow* GWindow::Instance() {
    QString lType = GConfig::Instance()->getData("WINDOW_TYPE");
    if(lType == "OPENGL_GLUT") return GWindowGLUT::Instance();
    if(lType == "OPENGL_SDL") return GWindowSDL::Instance();
    if(lType == "OPENGL_QT") return GWindowQt::Instance();
    if(lType == "OPENGL_GLFW") return GWindowGLFW::Instance();
    return 0;
}
//===============================================
void GWindow::setBackground() {
    float lRed = 5.0f/255.0f;
    float lGreen = 16.0f/255.0f;
    float lBlue = 57.0f/255.0f;
    float lAlpha = 255.0f/255.0f;
    glClearColor(lRed, lGreen, lBlue, lAlpha);
}
//===============================================
void GWindow::showVersion() {
    GLint lMajor, lMinor;
    glGetIntegerv(GL_MAJOR_VERSION, &lMajor);
    glGetIntegerv(GL_MINOR_VERSION, &lMinor);
    cout << "GL_MAJOR_VERSION: " << lMajor << "\n";
    cout << "GL_MINOR_VERSION: " << lMinor << "\n";
}
//===============================================
