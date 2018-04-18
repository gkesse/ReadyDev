//================================================
#ifndef _GShaderLayout_
#define _GShaderLayout_
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
} GShaderLayoutInfo;
//================================================
class GShaderLayout {
public:
    GShaderLayout();
    ~GShaderLayout();
	
public:
    static GShaderLayout* Instance();
    GLuint loadShader(GShaderLayoutInfo* shaderInfo);
	
private:
    static GShaderLayout* m_instance;
};
//================================================
#endif
//================================================
