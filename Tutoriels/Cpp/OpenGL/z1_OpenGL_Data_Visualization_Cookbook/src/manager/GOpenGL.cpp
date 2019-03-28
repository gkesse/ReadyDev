//================================================
#include "GOpenGL.h"
//================================================
GOpenGL* GOpenGL::m_instance = 0;
//================================================
GOpenGL::GOpenGL() {

}
//================================================
GOpenGL::~GOpenGL() {
	
}
//================================================
GOpenGL* GOpenGL::Instance() {
	if(m_instance == 0) {
        m_instance = new GOpenGL;
	}
	return m_instance;
}
//================================================
void GOpenGL::init() {
    glfwInit();
}
//================================================
void GOpenGL::createWindow(const int& w, const int& h, const string& title) {
    m_width = w;
    m_height = h;
    m_window = glfwCreateWindow(m_width, m_height, title.c_str(), NULL, NULL);
    m_ratio = (double)m_width / (double)m_height;
}
//================================================
void GOpenGL::setContext() {
    glfwMakeContextCurrent(m_window);
}
//================================================
void GOpenGL::setLineSmooth() {
    glEnable(GL_LINE_SMOOTH);
    glHint(GL_LINE_SMOOTH_HINT, GL_NICEST);
}
//================================================
void GOpenGL::setPointSmooth() {
    glEnable(GL_POINT_SMOOTH);
    glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);
}
//================================================
void GOpenGL::setBlendAlpha() {
    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);
}
//================================================
bool GOpenGL::getWindowClose() {
    bool lClose = glfwWindowShouldClose(m_window);
    return lClose;
}
//================================================
void GOpenGL::setViewPort() {
    glViewport(0, 0, m_width, m_height);
}
//================================================
void GOpenGL::clearBuffer() {
    glClear(GL_COLOR_BUFFER_BIT);
}
//================================================
void GOpenGL::setProjection() {
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    glOrtho(-m_ratio, m_ratio, -1.0, 1.0, 1.0, -1.0);
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();
}
//================================================
void GOpenGL::swapBuffers() {
    glfwSwapBuffers(m_window);
}
//================================================
void GOpenGL::getEvents() {
    glfwPollEvents();
}
//================================================
void GOpenGL::destroyWindow() {
    glfwDestroyWindow(m_window);
}
//================================================
void GOpenGL::terminate() {
    glfwTerminate();
}
//================================================
void GOpenGL::drawTriangle(GVertex* vertex, GColor* color) {
    glBegin(GL_TRIANGLES);
    for(int i = 0; i < 3; i++) {
        GVertex lVertex = vertex[i];
        GColor lColor = color[i];
        glColor3f(lColor.r, lColor.g, lColor.b);
        glVertex3f(lVertex.x, lVertex.y, lVertex.z);
    }
    glEnd();
}
//===============================================
