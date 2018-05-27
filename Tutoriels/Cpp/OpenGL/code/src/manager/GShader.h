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
    void showActiveUniforms(GLuint program);
    int getUniformLocation(GLuint program, const char* name);
    void setUniform(GLuint program, const char* name, float x, float y, float z);
    void setUniform(GLuint program, const char* name, const glm::vec3& v);
    void setUniform(GLuint program, const char* name, const glm::vec4& v);
    void setUniform(GLuint program, const char* name, const glm::mat4& m);
    void setUniform(GLuint program, const char* name, const glm::mat3& m);
    void setUniform(GLuint program, const char* name, float val );
    void setUniform(GLuint program, const char* name, int val);
    void setUniform(GLuint program, const char* name, bool val);
    void setSubroutine(GLuint program, const char* name);
    virtual GLuint loadShader(GShaderInfo* shaderInfo) = 0;

private:
	static GShader* m_instance;

protected:
    GAttribInfo* m_attribInfo;
};
//================================================
#endif
//================================================
