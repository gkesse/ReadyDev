//===============================================
#ifndef _GTextureQt_
#define _GTextureQt_
//================================================
#include "GTexture.h"
//===============================================
class GTextureQt : public GTexture {
public:
    GTextureQt();
    ~GTextureQt();

public:
    static GTextureQt* Instance();
    GLuint loadTexture(const char* filename);

private:
    static GTextureQt* m_instance;
};
//===============================================
#endif
//===============================================
