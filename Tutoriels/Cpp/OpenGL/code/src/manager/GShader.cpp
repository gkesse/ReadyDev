//================================================
#include "GShader.h"
#include "GShaderBind.h"
#include "GShaderLayout.h"
#include "GConfig.h"
//================================================
GShader* GShader::m_instance = 0;
//================================================
GShader::GShader() {

}
//================================================
GShader::~GShader() {
	
}
//================================================
GShader* GShader::Instance() {
    QString lMethod = GConfig::Instance()->getData("SHADER_LOAD_METHOD");
    if(lMethod == "BIND") return GShaderBind::Instance();
    if(lMethod == "LAYOUT") return GShaderLayout::Instance();
    return 0;
}
//================================================
void GShader::setAttribInfo(GAttribInfo* attribInfo) {
    m_attribInfo = attribInfo;
}
//================================================
void GShader::showActiveUniforms(GLuint program) {
    GLint lUniforms, lSize, lLocation, lMaxLen;
    GLchar* lName;
    GLsizei lWritten;
    GLenum lType;

    glGetProgramiv(program, GL_ACTIVE_UNIFORM_MAX_LENGTH, &lMaxLen);
    glGetProgramiv(program, GL_ACTIVE_UNIFORMS, &lUniforms);

    lName = new GLchar[lMaxLen];

    for( int i = 0; i < lUniforms; ++i ) {
        glGetActiveUniform(program, i, lMaxLen, &lWritten, &lSize, &lType, lName);
        lLocation = glGetUniformLocation(program, lName);
        cout << "LOCATION: " << lLocation << " | ";
        cout << "NAME: " << lName << "\n";
    }

    delete[] lName;
}
//===============================================
int GShader::getUniformLocation(GLuint program, const char * name) {
    return glGetUniformLocation(program, name);
}
//================================================
void GShader::setUniform(GLuint program, const char* name, float x, float y, float z) {
    int lLocation = glGetUniformLocation(program, name);
    if(lLocation >= 0) {
        glUniform3f(lLocation, x, y, z);
    }
}
//===============================================
void GShader::setUniform(GLuint program, const char *name, const glm::vec3 & v) {
    setUniform(program, name, v.x, v.y, v.z);
}
//===============================================
void GShader::setUniform(GLuint program, const char *name, const glm::vec4 & v) {
    int lLocation = glGetUniformLocation(program, name);
    if(lLocation >= 0) {
        glUniform4f(lLocation, v.x, v.y, v.z, v.w);
    }
}
//===============================================
void GShader::setUniform(GLuint program, const char *name, const glm::mat4 & m) {
    int lLocation = glGetUniformLocation(program, name);
    if(lLocation >= 0) {
        glUniformMatrix4fv(lLocation, 1, GL_FALSE, &m[0][0]);
    }
}
//===============================================
void GShader::setUniform(GLuint program, const char *name, const glm::mat3 & m) {
    int lLocation = glGetUniformLocation(program, name);
    if(lLocation >= 0) {
        glUniformMatrix3fv(lLocation, 1, GL_FALSE, &m[0][0]);
    }
}
//===============================================
void GShader::setUniform(GLuint program, const char *name, float val) {
    int lLocation = glGetUniformLocation(program, name);
    if(lLocation >= 0)
    {
        glUniform1f(lLocation, val);
    }
}
//===============================================
void GShader::setUniform(GLuint program, const char *name, int val) {
    int lLocation = glGetUniformLocation(program, name);
    if(lLocation >= 0) {
        glUniform1i(lLocation, val);
    }
}
//===============================================
void GShader::setUniform(GLuint program, const char *name, bool val) {
    int lLocation = glGetUniformLocation(program, name);
    if(lLocation >= 0) {
        glUniform1i(lLocation, val);
    }
}
//===============================================
