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
void GOpenGL::setPointSmooth(const bool& ok) {
    if(ok == true) {
        glEnable(GL_POINT_SMOOTH);
        glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);
    }
    else {
        glDisable(GL_POINT_SMOOTH);
    }
}
//================================================
void GOpenGL::setLineSmooth(const bool& ok) {
    if(ok == true) {
        glEnable(GL_LINE_SMOOTH);
        glHint(GL_LINE_SMOOTH_HINT, GL_NICEST);
    }
    else {
        glDisable(GL_LINE_SMOOTH);
    }
}
//================================================
void GOpenGL::setBlendAlpha(const bool& ok) {
    if(ok == true) {
        glEnable(GL_BLEND);
        glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);
    }
    else {
        glDisable(GL_BLEND);
    }
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
void GOpenGL::clearBuffer(const int& mask) {
    glClear(mask);
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
void GOpenGL::drawPoint(const GVertex& vertex, const GColor& color, const int& size) {
    glPointSize(size);
    glBegin(GL_POINTS);
    glColor3f(color.r, color.g, color.b);
    glVertex3f(vertex.x, vertex.y, vertex.z);
    glEnd();
}
//================================================
void GOpenGL::drawLine(const GVertex* vertex, const GColor* color, const int& width) {
    glLineWidth(width);
    glBegin(GL_LINES);
    for(int i = 0; i < 2; i++) {
        GVertex lVertex = vertex[i];
        GColor lColor = color[i];
        glColor4f(lColor.r, lColor.g, lColor.b, lColor.a);
        glVertex3f(lVertex.x, lVertex.y, lVertex.z);
    }
    glEnd();
}
//================================================
void GOpenGL::drawTriangle(const GVertex* vertex, const GColor* color) {
    glBegin(GL_TRIANGLES);
    for(int i = 0; i < 3; i++) {
        GVertex lVertex = vertex[i];
        GColor lColor = color[i];
        glColor4f(lColor.r, lColor.g, lColor.b, lColor.a);
        glVertex3f(lVertex.x, lVertex.y, lVertex.z);
    }
    glEnd();
}
//===============================================
