//================================================
#ifndef _GShaderBind_
#define _GShaderBind_
//================================================
#include <iostream>
//================================================
#include "GShader.h"
//================================================
using namespace std;
//================================================
class GShaderBind : public GShader {
public:
    GShaderBind();
    ~GShaderBind();
	
public:
    static GShaderBind* Instance();
    GLuint loadShader(GShaderInfo* shaderInfo);
	
private:
    static GShaderBind* m_instance;
};
//================================================
#endif
//================================================
