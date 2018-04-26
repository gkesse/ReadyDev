//===============================================
#include "GTextureSDL.h"
//===============================================
GTextureSDL* GTextureSDL::m_instance = 0;
//===============================================
GTextureSDL::GTextureSDL() {

}
//===============================================
GTextureSDL::~GTextureSDL() {

}
//===============================================
GTextureSDL* GTextureSDL::Instance() {
    if(m_instance == 0) {
        m_instance = new GTextureSDL;
    }
    return m_instance;
}
//===============================================
SDL_Surface* GTextureSDL::flipVertical(SDL_Surface* srcImg) {
    SDL_Surface* lDstImg = SDL_CreateRGBSurface(srcImg->flags, srcImg->w, srcImg->h, srcImg->format->BytesPerPixel * 8, srcImg->format->Rmask, srcImg->format->Gmask, srcImg->format->Bmask, srcImg->format->Amask);
    int lSrcPitch = srcImg->pitch;
    int lSrcLineLength = lSrcPitch*srcImg->h;
    uchar* lSrcPixels = static_cast<unsigned char*>(srcImg->pixels) + lSrcLineLength;
    uchar* lDstPixels = static_cast<unsigned char*>(lDstImg->pixels) ;
    for(int line = 0; line < srcImg->h; ++line) {
        memcpy(lDstPixels, lSrcPixels, lSrcPitch);
        lSrcPixels -= lSrcPitch;
        lDstPixels += lSrcPitch;
    }
    return lDstImg;
}
//===============================================
GLuint GTextureSDL::loadTexture(const char* filename) {
    GLuint lTextureId;
    SDL_Surface *lLoad = IMG_Load(filename);
    SDL_Surface *lSurface = flipVertical(lLoad);
    SDL_FreeSurface(lLoad);

    glActiveTexture(GL_TEXTURE0);
    glGenTextures(1, &lTextureId);
    glBindTexture(GL_TEXTURE_2D, lTextureId);

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
    return lTextureId;
}
//===============================================
