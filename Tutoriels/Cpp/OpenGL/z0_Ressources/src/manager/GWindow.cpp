//================================================
#include "GWindow.h"
#include "GAntiAliasing.h"
#include "GDraw.h"
//================================================
GWindow* GWindow::m_instance = 0;
//================================================
GWindow::GWindow() {

}
//================================================
GWindow::~GWindow() {

}
//================================================
GWindow* GWindow::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindow;
    }
    return m_instance;
}
//================================================
void GWindow::show() {
    glfwInit();
    GLFWwindow* lWindow = glfwCreateWindow(400, 400, "OpenGL | ReadyDev", NULL, NULL);
    glfwMakeContextCurrent(lWindow);

    GAntiAliasing::Instance()->enable();

    while(!glfwWindowShouldClose(lWindow)) {
        int lWidth, lHeight;
        glfwGetFramebufferSize(lWindow, &lWidth, &lHeight);
        float lRatio = lWidth / (float)lHeight;
        glViewport(0, 0, lWidth, lHeight);
        glClear(GL_COLOR_BUFFER_BIT);

        glMatrixMode(GL_PROJECTION);
        glLoadIdentity();
        glOrtho(-lRatio, lRatio, -1.f, 1.f, 1.f, -1.f);
        glMatrixMode(GL_MODELVIEW);
        glLoadIdentity();
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);

        GDraw::Instance()->draw();

        glfwSwapBuffers(lWindow);
        glfwPollEvents();
    }
}
//================================================
