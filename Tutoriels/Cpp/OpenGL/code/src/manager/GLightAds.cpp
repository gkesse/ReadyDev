//================================================
#include "GLightAds.h"
#include "GShader.h"
//================================================
GLightAds* GLightAds::m_instance = 0;
//================================================
GLightAds::GLightAds() {

}
//================================================
GLightAds::~GLightAds() {
	
}
//================================================
GLightAds* GLightAds::Instance() {
	if(m_instance == 0) {
        m_instance = new GLightAds;
	}
	return m_instance;
}
//================================================
void GLightAds::initLight(GLuint program) {
    GShader::Instance()->setUniform(program, "Kd", 0.9f, 0.5f, 0.3f);
    GShader::Instance()->setUniform(program, "Ld", 1.0f, 1.0f, 1.0f);
}
//================================================
void GLightAds::draw(GLuint program, const glm::mat4& view) {
    GShader::Instance()->setUniform(program, "LightPosition", view * glm::vec4(5.0f,5.0f,2.0f,1.0f));
}
//================================================
