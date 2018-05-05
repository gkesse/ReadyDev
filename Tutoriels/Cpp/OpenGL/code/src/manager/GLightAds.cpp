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
void GLightAds::draw(GLuint program, const glm::mat4& view) {
    GShader::Instance()->setUniform(program, "Material.Ka", 0.9f, 0.5f, 0.3f);
    GShader::Instance()->setUniform(program, "Material.Kd", 0.9f, 0.5f, 0.3f);
    GShader::Instance()->setUniform(program, "Material.Ks", 0.8f, 0.8f, 0.8f);
    GShader::Instance()->setUniform(program, "Material.Shininess", 100.0f);
    GShader::Instance()->setUniform(program, "Light.Position", view * glm::vec4(5.0f,5.0f,2.0f,1.0f));
    GShader::Instance()->setUniform(program, "Light.La", 0.4f, 0.4f, 0.4f);
    GShader::Instance()->setUniform(program, "Light.Ld", 1.0f, 1.0f, 1.0f);
    GShader::Instance()->setUniform(program, "Light.Ls", 1.0f, 1.0f, 1.0f);
}
//================================================
