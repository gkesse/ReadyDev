//===============================================
#include "GTextureQt.h"
//===============================================
GTextureQt* GTextureQt::m_instance = 0;
//===============================================
GTextureQt::GTextureQt() {

}
//===============================================
GTextureQt::~GTextureQt() {

}
//===============================================
GTextureQt* GTextureQt::Instance() {
    if(m_instance == 0) {
        m_instance = new GTextureQt;
    }
    return m_instance;
}
//===============================================
GLuint GTextureQt::loadTexture(const char* filename) {
    GLuint lTextureId;
    QImage lImg = QGLWidget::convertToGLFormat(QImage(filename,"JPG"));
    glActiveTexture(GL_TEXTURE0);
    glGenTextures(1, &lTextureId);
    glBindTexture(GL_TEXTURE_2D, lTextureId);
    glTexImage2D(GL_TEXTURE_2D, 0, GL_RGBA, lImg.width(), lImg.height(), 0, GL_RGBA, GL_UNSIGNED_BYTE, lImg.bits());
    glTexParameterf(GL_TEXTURE_2D, GL_TEXTURE_MAG_FILTER, GL_LINEAR);
    glTexParameterf(GL_TEXTURE_2D, GL_TEXTURE_MIN_FILTER, GL_LINEAR);
    return lTextureId;
}
//===============================================
