//===============================================
#ifndef _GTexture_
#define _GTexture_
//================================================
#include "GInclude.h"
//===============================================
class GTexture {
public:
    GTexture();
    ~GTexture();

public:
    static GTexture* Instance();
    GLuint loadTexture(const char* filename);

private:
    static GTexture* m_instance;
};
//===============================================
#endif
//===============================================
