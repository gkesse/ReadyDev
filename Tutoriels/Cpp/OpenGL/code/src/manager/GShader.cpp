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
    QString m_method = GConfig::Instance()->getData("SHADER_LOAD_METHOD");
    if(m_method == "BIND") return GShaderBind::Instance();
    if(m_method == "LAYOUT") return GShaderLayout::Instance();
    return 0;
}
//================================================
void GShader::setAttribInfo(GAttribInfo* attribInfo) {
    m_attribInfo = attribInfo;
}
//================================================
void GShader::showActiveUniforms() {
    GLint m_uniforms, m_size, lLocation, m_maxLen;
    GLchar* m_name;
    GLsizei m_written;
    GLenum m_type;

    glGetProgramiv(m_program, GL_ACTIVE_UNIFORM_MAX_LENGTH, &m_maxLen);
    glGetProgramiv(m_program, GL_ACTIVE_UNIFORMS, &m_uniforms);

    m_name = new GLchar[m_maxLen];

    for( int i = 0; i < m_uniforms; ++i ) {
        glGetActiveUniform(m_program, i, m_maxLen, &m_written, &m_size, &m_type, m_name);
        lLocation = glGetUniformLocation(m_program, m_name);
        cout << "LOCATION: " << lLocation << " | ";
        cout << "NAME: " << m_name << "\n";
    }

    delete[] m_name;
}
//===============================================
int GShader::getUniformLocation(const char * name) {
    return glGetUniformLocation(m_program, name);
}
//================================================
void GShader::setUniform(const char *name, float x, float y, float z) {
    int lLocation = getUniformLocation(name);
    if(lLocation >= 0) {
        glUniform3f(lLocation, x, y, z);
    }
}
//===============================================
void GShader::setUniform(const char *name, const glm::vec3 & v) {
    setUniform(name, v.x, v.y, v.z);
}
//===============================================
void GShader::setUniform(const char *name, const glm::vec4 & v) {
    int lLocation = getUniformLocation(name);
    if(lLocation >= 0) {
        glUniform4f(lLocation, v.x, v.y, v.z, v.w);
    }
}
//===============================================
void GShader::setUniform(const char *name, const glm::mat4 & m) {
    int lLocation = getUniformLocation(name);
    if(lLocation >= 0) {
        glUniformMatrix4fv(lLocation, 1, GL_FALSE, &m[0][0]);
    }
}
//===============================================
void GShader::setUniform(const char *name, const glm::mat3 & m) {
    int lLocation = getUniformLocation(name);
    if(lLocation >= 0) {
        glUniformMatrix3fv(lLocation, 1, GL_FALSE, &m[0][0]);
    }
}
//===============================================
void GShader::setUniform(const char *name, float val) {
    int lLocation = getUniformLocation(name);
    if(lLocation >= 0)
    {
        glUniform1f(lLocation, val);
    }
}
//===============================================
void GShader::setUniform(const char *name, int val) {
    int lLocation = getUniformLocation(name);
    if(lLocation >= 0) {
        glUniform1i(lLocation, val);
    }
}
//===============================================
void GShader::setUniform(const char *name, bool val) {
    int lLocation = getUniformLocation(name);
    if(lLocation >= 0) {
        glUniform1i(lLocation, val);
    }
}
//===============================================
