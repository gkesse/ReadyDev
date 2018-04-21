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
int GShader::getUniformLocation(const char * name )
{
    return glGetUniformLocation(m_program, name);
}
//================================================
void GShader::setUniform(const char *name, float x, float y, float z) {
    int m_loc = getUniformLocation(name);
    if(m_loc >= 0 ) {
        glUniform3f(m_loc, x, y, z);
    }
}
//===============================================
void GShader::setUniform(const char *name, const glm::vec3 & v)
{
    this->setUniform(name,v.x,v.y,v.z);
}
//===============================================
void GShader::setUniform(const char *name, const glm::vec4 & v)
{
    int loc = getUniformLocation(name);
    if(loc >= 0 ) {
        glUniform4f(loc,v.x,v.y,v.z,v.w);
    }
}
//===============================================
void GShader::setUniform(const char *name, const glm::mat4 & m)
{
    int loc = getUniformLocation(name);
    if(loc >= 0 )
    {
        glUniformMatrix4fv(loc, 1, GL_FALSE, &m[0][0]);
    }
}
//===============================================
void GShader::setUniform(const char *name, const glm::mat3 & m)
{
    int loc = getUniformLocation(name);
    if(loc >= 0 )
    {
        glUniformMatrix3fv(loc, 1, GL_FALSE, &m[0][0]);
    }
}
//===============================================
void GShader::setUniform(const char *name, float val )
{
    int loc = getUniformLocation(name);
    if(loc >= 0 )
    {
        glUniform1f(loc, val);
    }
}
//===============================================
void GShader::setUniform(const char *name, int val )
{
    int loc = getUniformLocation(name);
    if(loc >= 0 )
    {
        glUniform1i(loc, val);
    }
}
//===============================================
void GShader::setUniform(const char *name, bool val )
{
    int loc = getUniformLocation(name);
    if(loc >= 0 )
    {
        glUniform1i(loc, val);
    }
}
//===============================================
