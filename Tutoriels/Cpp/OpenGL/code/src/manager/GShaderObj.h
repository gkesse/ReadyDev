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
class GShader {
public:
	GShader();
	~GShader();
	
public:
	static GShader* Instance();
    void setAttribInfo(GAttribInfo* attribInfo);
    void showActiveUniforms();
    int getUniformLocation(const char * name );
    void setUniform(const char *name, float x, float y, float z);
    void setUniform(const char *name, const glm::vec3 & v);
    void setUniform(const char *name, const glm::vec4 & v);
    void setUniform(const char *name, const glm::mat4 & m);
    void setUniform(const char *name, const glm::mat3 & m);
    void setUniform(const char *name, float val );
    void setUniform(const char *name, int val);
    void setUniform(const char *name, bool val);
    virtual GLuint loadShader(GShaderInfo* shaderInfo) = 0;

private:
	static GShader* m_instance;

protected:
    GLuint m_program;
    GAttribInfo* m_attribInfo;
};
//================================================
#endif
//================================================
