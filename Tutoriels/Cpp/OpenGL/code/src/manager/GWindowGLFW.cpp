//===============================================
#include "GWindowGLFW.h"
#include "GDraw.h"
#include "GConfig.h"
//===============================================
GWindowGLFW* GWindowGLFW::m_instance = 0;
//===============================================
GWindowGLFW::GWindowGLFW() {
    m_x = 0;
    m_y = 0;
    m_w = 400;
    m_h = 400;
    m_title = "OpenGL | GLFW | ReadyDev";
}
//===============================================
GWindowGLFW::~GWindowGLFW() {

}
//===============================================
GWindowGLFW* GWindowGLFW::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowGLFW;
    }
    return m_instance;
}
//===============================================
void GWindowGLFW::show(int* argc, char** argv) {
    glfwInit();
    m_window = glfwCreateWindow(m_w, m_h, m_title.c_str(), NULL, NULL);
    glfwMakeContextCurrent(m_window);
    while(!glfwWindowShouldClose(m_window)) {
        float ratio;
        int width, height;

        //get the current width and height of the window,
        //in case the window is resized by the user
        glfwGetFramebufferSize(m_window, &width, &height);
        ratio = width / (float)height;

        //Set up the viewport (using the width and height of the window)
        //and clear the screen color buffer.
        glViewport(0, 0, width, height);
        glClear(GL_COLOR_BUFFER_BIT);
        //Set up the camera matrix. Note: further details on the camera model will be discussed in Chapter 3
        glMatrixMode(GL_PROJECTION);
        glLoadIdentity();
        glOrtho(-ratio, ratio, -1.f, 1.f, 1.f, -1.f);
        glMatrixMode(GL_MODELVIEW);
        glLoadIdentity();

        //Draw a rotating triangle and set a different color (red, green, and blue channels) for each vertex (x, y, z) of the triangle.
        glRotatef((float)glfwGetTime() * 50.f, 0.f, 0.f, 1.f); //Rotate the triangle over time.

        GDraw::Instance()->draw();
        glfwSwapBuffers(m_window);
        glfwPollEvents();
    }

    glfwDestroyWindow(m_window);
    glfwTerminate();
}
//===============================================
void GWindowGLFW::setBackground() {
    float lRed = 5.0f/255.0f;
    float lGreen = 16.0f/255.0f;
    float lBlue = 57.0f/255.0f;
    float lAlpha = 255.0f/255.0f;
    static float lBackgroundColor[] = {lRed, lGreen, lBlue, lAlpha};
    glClearBufferfv(GL_COLOR, 0, lBackgroundColor);
}
//===============================================
void GWindowGLFW::setCenter() {
}
//===============================================
