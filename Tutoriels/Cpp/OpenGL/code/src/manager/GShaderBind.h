//================================================
#ifndef _GShaderBind_
#define _GShaderBind_
//================================================
#include <iostream>
//================================================
#include "GInclude.h"
//================================================
using namespace std;
//================================================
typedef struct {
    GLenum type;
    const char* filename;
    GLuint shader;
    GLuint attribLoc;
    const char* attribName;
} GShaderBindInfo;
//================================================
class GShaderBind {
public:
    GShaderBind();
    ~GShaderBind();
	
public:
    static GShaderBind* Instance();
    GLuint loadShader(GShaderBindInfo* shaderInfo);
	
private:
    static GShaderBind* m_instance;
};
//================================================
#endif
//================================================
