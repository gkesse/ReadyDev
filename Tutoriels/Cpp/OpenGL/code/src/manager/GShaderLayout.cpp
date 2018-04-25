//================================================
#include "GShaderLayout.h"
#include "GFile.h"
//================================================
GShaderLayout* GShaderLayout::m_instance = 0;
//================================================
GShaderLayout::GShaderLayout() {

}
//================================================
GShaderLayout::~GShaderLayout() {
	
}
//================================================
GShaderLayout* GShaderLayout::Instance() {
	if(m_instance == 0) {
        m_instance = new GShaderLayout;
	}
	return m_instance;
}
//================================================
GLuint GShaderLayout::loadShader(GShaderInfo *shaderInfo) {
	if(shaderInfo == NULL) return 0;
	
    GLuint lProgram = glCreateProgram();
    GShaderInfo* m_shaderInfo = shaderInfo;
	
    while(m_shaderInfo->type != GL_NONE) {
        GLuint m_shader = glCreateShader(m_shaderInfo->type);
        m_shaderInfo->shader = m_shader;
        GLchar* m_source = GFile::Instance()->getFileContent(m_shaderInfo->filename);
        glShaderSource(m_shader, 1, &m_source, NULL);
        delete[] m_source;
        glCompileShader(m_shader);
        GLint m_compiled;
        glGetShaderiv(m_shader, GL_COMPILE_STATUS, &m_compiled);
        glAttachShader(lProgram, m_shader);
        m_shaderInfo++;
	}

    glLinkProgram(lProgram);
    GLint m_linked;
    glGetProgramiv(lProgram, GL_LINK_STATUS, &m_linked);
    return lProgram;
}
//================================================
