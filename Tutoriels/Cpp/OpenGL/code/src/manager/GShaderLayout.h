//================================================
#ifndef _GShaderLayout_
#define _GShaderLayout_
//================================================
#include <iostream>
//================================================
#include "GShader.h"
//================================================
using namespace std;
//================================================
class GShaderLayout : public GShader {
public:
    GShaderLayout();
    ~GShaderLayout();
	
public:
    static GShaderLayout* Instance();
    GLuint loadShader(GShaderInfo* shaderInfo);
	
private:
    static GShaderLayout* m_instance;
};
//================================================
#endif
//================================================
