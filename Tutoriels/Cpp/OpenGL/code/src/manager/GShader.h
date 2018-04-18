//================================================
#ifndef _GShader_
#define _GShader_
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
} GShaderInfo;
//================================================
class GShader {
public:
	GShader();
	~GShader();
	
public:
	static GShader* Instance();
    virtual GLuint loadShader(GShaderInfo* shaderInfo) = 0;

private:
	static GShader* m_instance;
};
//================================================
#endif
//================================================
