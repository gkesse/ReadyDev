//================================================
#include "GLightDiffuse.h"
#include "GShader.h"
//================================================
GLightDiffuse* GLightDiffuse::m_instance = 0;
//================================================
GLightDiffuse::GLightDiffuse() {

}
//================================================
GLightDiffuse::~GLightDiffuse() {
	
}
//================================================
GLightDiffuse* GLightDiffuse::Instance() {
	if(m_instance == 0) {
        m_instance = new GLightDiffuse;
	}
	return m_instance;
}
//================================================
void GLightDiffuse::draw(GLuint program, const glm::mat4& view) {
    GShader::Instance()->setUniform(program, "Kd", 0.9f, 0.5f, 0.3f);
    GShader::Instance()->setUniform(program, "Ld", 1.0f, 1.0f, 1.0f);
    GShader::Instance()->setUniform(program, "LightPosition", view * glm::vec4(5.0f,5.0f,2.0f,1.0f));
}
//================================================
