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
void GTexture::loadTexture(const char* filename) {
    GLuint lId;
    SDL_Surface *lSurface = IMG_Load(filename);
    glGenTextures(1, &lId);
    glBindTexture(GL_TEXTURE_2D, lId);

    GLenum formatInterne(0);
    GLenum format(0);

    if(lSurface->format->BytesPerPixel == 3)  {
        formatInterne = GL_RGB;
        if(lSurface->format->Rmask == 0xff) format = GL_RGB;
        else format = GL_BGR;
    }
    else if(lSurface->format->BytesPerPixel == 4) {
        formatInterne = GL_RGBA;
        if(lSurface->format->Rmask == 0xff) format = GL_RGBA;
        else format = GL_BGRA;
    }
    glTexImage2D(GL_TEXTURE_2D, 0, formatInterne, lSurface->w,lSurface->h, 0, format, GL_UNSIGNED_BYTE, lSurface->pixels);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MIN_FILTER, GL_LINEAR);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MAG_FILTER, GL_NEAREST);
    glBindTexture(GL_TEXTURE_2D, 0);
    SDL_FreeSurface(lSurface);
}
//===============================================
