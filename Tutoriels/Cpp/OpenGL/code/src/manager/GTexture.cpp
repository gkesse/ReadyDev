//===============================================
#include "GTexture.h"
//===============================================
GTexture* GTexture::m_instance = 0;
//===============================================
GTexture::GTexture() {

}
//===============================================
GTexture::~GTexture() {

}
//===============================================
GTexture* GTexture::Instance() {
    if(m_instance == 0) {
        m_instance = new GTexture;
    }
    return m_instance;
}
//===============================================
GLuint GTexture::loadTexture(const char* filename) {
    GLuint lId;
    SDL_Surface *lSurface = IMG_Load(filename);
    glGenTextures(1, &lId);
    glBindTexture(GL_TEXTURE_2D, lId);

    GLenum lInternalFormat(0);
    GLenum lFormat(0);

    if(lSurface->format->BytesPerPixel == 3)  {
        lInternalFormat = GL_RGB;
        if(lSurface->format->Rmask == 0xff) lFormat = GL_RGB;
        else lFormat = GL_BGR;
    }
    else if(lSurface->format->BytesPerPixel == 4) {
        lInternalFormat = GL_RGBA;
        if(lSurface->format->Rmask == 0xff) lFormat = GL_RGBA;
        else lFormat = GL_BGRA;
    }
    glTexImage2D(GL_TEXTURE_2D, 0, lInternalFormat, lSurface->w,lSurface->h, 0, lFormat, GL_UNSIGNED_BYTE, lSurface->pixels);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MIN_FILTER, GL_LINEAR);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MAG_FILTER, GL_NEAREST);
    glBindTexture(GL_TEXTURE_2D, 0);
    SDL_FreeSurface(lSurface);
    return lId;
}
//===============================================
