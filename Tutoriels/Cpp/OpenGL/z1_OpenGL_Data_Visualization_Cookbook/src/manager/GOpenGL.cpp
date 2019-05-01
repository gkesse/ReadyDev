//================================================
#include "GOpenGL.h"
#include "GMath.h"
//================================================
GOpenGL* GOpenGL::m_instance = 0;
//================================================
GOpenGL::GOpenGL() {
    m_fovY = 45.0;
    m_front = 0.1;
    m_back = 128.0;
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
void GOpenGL::createWindow(const int& width, const int& height, const string& title) {
    m_width = width;
    m_height = height;
    m_window = glfwCreateWindow(m_width, m_height, title.c_str(), NULL, NULL);
    m_ratio = (double)m_width / (double)m_height;
}
//================================================
void GOpenGL::setOnKeyboard(GLFWkeyfun onKeyboard) {
    glfwSetKeyCallback(m_window, onKeyboard);
}
//================================================
void GOpenGL::setOnResize(GLFWframebuffersizefun onResize) {
    glfwSetFramebufferSizeCallback(m_window, onResize);
}
//================================================
void GOpenGL::onResize(GLFWwindow* window, int width, int height) {
    m_width = width;
    m_height = height;
    onResize();
}
//================================================
void GOpenGL::onResize() {
    m_ratio = (double)m_width / (double)m_height;
    setViewPort();
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();

    double lFovY = GMath::Instance()->rad(m_fovY / 2.0);
    double lTan = tan(lFovY);
    double lHeight = m_front * lTan;
    double lWidth = m_ratio * lHeight;
    glFrustum(-lWidth, lWidth, -lHeight, lHeight, m_front, m_back);
}
//================================================
void GOpenGL::setContext() {
    glfwMakeContextCurrent(m_window);
}
//================================================
void GOpenGL::swapInterval(const int& delay) {
    glfwSwapInterval(delay);
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
void GOpenGL::clear(const int& mask) {
    glClear(mask);
}
//================================================
void GOpenGL::clearColor(const double& r, const double& g, const double& b, const double& a) {
    glClearColor(r, g, b, a);
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
void GOpenGL::setModelView() {
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();
}
//================================================
void GOpenGL::swapBuffers() {
    glfwSwapBuffers(m_window);
}
//================================================
void GOpenGL::pollEvents() {
    glfwPollEvents();
}
//================================================
void GOpenGL::closeWindow() {
    glfwSetWindowShouldClose(m_window, GL_TRUE);
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
void GOpenGL::drawPoint(const GVertex& vertex, const GColor& color, const int& pointSize) {
    glPointSize(pointSize);
    glBegin(GL_POINTS);
    glColor3f(color.r, color.g, color.b);
    glVertex3f(vertex.x, vertex.y, vertex.z);
    glEnd();
}
//================================================
void GOpenGL::drawPoints(const GVertex* vertex, const GColor& color, const int& pointSize, const int& nVertex) {
    glPointSize(pointSize);
    glBegin(GL_POINTS);
    for(int i = 0; i < nVertex; i++){
        GVertex lVertex = vertex[i];
        glColor3f(color.r, color.g, color.b);
        glVertex3f(lVertex.x, lVertex.y, lVertex.z);
    }
    glEnd();
}
//================================================
void GOpenGL::drawLine(const GVertex* vertex, const GColor* color, const double& width) {
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
void GOpenGL::drawLines(const GVertex* vertex, const GColor& color, const double& width, const int& nVertex) {
    glLineWidth(width);
    glBegin(GL_LINE_STRIP);
    for(int i = 0; i < nVertex; i++){
        GVertex lVertex = vertex[i];
        glColor4f(color.r, color.g, color.b, color.a);
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
