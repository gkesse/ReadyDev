//===============================================
#include "GProcessGlfwApplication.h"
//===============================================
GProcessGlfwApplication* GProcessGlfwApplication::m_instance = 0;
//===============================================
GProcessGlfwApplication::GProcessGlfwApplication() {

}
//===============================================
GProcessGlfwApplication::~GProcessGlfwApplication() {

}
//===============================================
GProcessGlfwApplication* GProcessGlfwApplication::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessGlfwApplication;
    }
    return m_instance;
}
//===============================================
void GProcessGlfwApplication::run(int argc, char **argv) {
    cout << "\n### Application GLFW\n\n";
    GLFWwindow* window;

    if(!glfwInit()) {
        return;
    }

    window = glfwCreateWindow(400, 400, "OpenGL | ReadyDev", NULL, NULL);

    if(!window) {
        glfwTerminate();
        return;
    }

    glfwMakeContextCurrent(window);

    while (!glfwWindowShouldClose(window)) {
        float ratio;
        int width, height;
        glfwGetFramebufferSize(window, &width, &height);
        ratio = (float) width / (float) height;
        glViewport(0, 0, width, height);
        glClear(GL_COLOR_BUFFER_BIT);

        glMatrixMode(GL_PROJECTION);
        glLoadIdentity();
        glOrtho(-ratio, ratio, -1.f, 1.f, 1.f, -1.f);
        glMatrixMode(GL_MODELVIEW);
        glLoadIdentity();

        glRotatef((float)glfwGetTime() * 50.f, 0.f, 0.f, 1.f);
        glBegin(GL_TRIANGLES);
        glColor3f(1.f, 0.f, 0.f);
        glVertex3f(-0.6f, -0.4f, 0.f);
        glColor3f(0.f, 1.f, 0.f);
        glVertex3f(0.6f, -0.4f, 0.f);
        glColor3f(0.f, 0.f, 1.f);
        glVertex3f(0.f, 0.6f, 0.f);
        glEnd();

        glfwSwapBuffers(window);
        glfwPollEvents();
    }

    glfwDestroyWindow(window);
    glfwTerminate();
}
//===============================================
