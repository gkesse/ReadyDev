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
	
    GLuint n_program = glCreateProgram();
    GShaderInfo* n_shaderInfo = shaderInfo;
	
    while(n_shaderInfo->type != GL_NONE) {
        GLuint n_shader = glCreateShader(n_shaderInfo->type);
        n_shaderInfo->shader = n_shader;
        GLchar* n_source = GFile::Instance()->getFileContent(n_shaderInfo->filename);
        glShaderSource(n_shader, 1, &n_source, NULL);
        delete[] n_source;
        glCompileShader(n_shader);
        GLint n_compiled;
        glGetShaderiv(n_shader, GL_COMPILE_STATUS, &n_compiled);
        glAttachShader(n_program, n_shader);
        n_shaderInfo++;
	}
	
    glLinkProgram(n_program);
    GLint n_linked;
    glGetProgramiv(n_program, GL_LINK_STATUS, &n_linked);
    return n_program;
}
//================================================
