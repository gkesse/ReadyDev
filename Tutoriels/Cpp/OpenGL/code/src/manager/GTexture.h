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
    virtual GLuint loadTexture(const char* filename) = 0;

private:
    static GTexture* m_instance;
};
//===============================================
#endif
//===============================================
