//================================================
#include "GShader.h"
#include "GFile.h"
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
	if(m_instance == 0) {
		m_instance = new GShader;
	}
	return m_instance;
}
//================================================
GLuint GShader::loadShader(GShaderInfo* shaderInfo) {
	if(shaderInfo == NULL) return 0;
	
	GLuint m_program = glCreateProgram();
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
		glAttachShader(m_program, m_shader);
		m_shaderInfo++;
	}
	
	glLinkProgram(m_program);
	GLint m_linked;
	glGetProgramiv(m_program, GL_LINK_STATUS, &m_linked);
	return m_program;
}
//================================================
