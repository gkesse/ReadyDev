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
void GOpenGL::setCallback(const string& title, cv::OpenGlDrawCallback onOpenGlDraw, void* params) {
    cv::setOpenGlDrawCallback(title, onOpenGlDraw, params);
}
//================================================
void GOpenGL::setTexture(cv::ogl::Texture2D& texture, const cv::Mat& img) {
    texture = cv::ogl::Texture2D(img);
}
//================================================
void GOpenGL::update(const string& title) {
    cv::updateWindow(title);
}
//================================================
