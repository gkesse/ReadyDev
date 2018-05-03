//================================================
#include "GShaderBind.h"
#include "GFile.h"
//================================================
GShaderBind* GShaderBind::m_instance = 0;
//================================================
GShaderBind::GShaderBind() {

}
//================================================
GShaderBind::~GShaderBind() {
	
}
//================================================
GShaderBind* GShaderBind::Instance() {
	if(m_instance == 0) {
        m_instance = new GShaderBind;
	}
	return m_instance;
}
//================================================
GLuint GShaderBind::loadShader(GShaderInfo* shaderInfo) {
	if(shaderInfo == NULL) return 0;
	
    GLuint m_program = glCreateProgram();
    GShaderInfo* m_shaderInfo = shaderInfo;
    GAttribInfo* m_attribs = m_attribInfo;

    while(m_shaderInfo->type != GL_NONE) {
        GLuint m_shader = glCreateShader(m_shaderInfo->type);
        m_shaderInfo->shader = m_shader;
        GLchar* m_source = GFile::Instance()->getFileContent(m_shaderInfo->filename);
        glShaderSource(m_shader, 1, &m_source, NULL);
        delete[] m_source;
        glCompileShader(m_shader);
        GLint m_compiled;
        glGetShaderiv(m_shader, GL_COMPILE_STATUS, &m_compiled);
        glBindAttribLocation(m_program, m_attribs->loc, m_attribs->name);
        glAttachShader(m_program, m_shader);
        m_shaderInfo++;
        m_attribs++;
    }

    glLinkProgram(m_program);
    GLint m_linked;
    glGetProgramiv(m_program, GL_LINK_STATUS, &m_linked);
    return m_program;
}
//================================================
