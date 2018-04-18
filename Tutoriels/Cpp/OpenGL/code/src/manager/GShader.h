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
    GLuint attribLoc;
    const char* attribName;
} GShaderInfo;
//================================================
class GShader {
public:
	GShader();
	~GShader();
	
public:
	static GShader* Instance();
	GLuint loadShader(GShaderInfo* shaderInfo);
	
private:
	static GShader* m_instance;
};
//================================================
#endif
//================================================
