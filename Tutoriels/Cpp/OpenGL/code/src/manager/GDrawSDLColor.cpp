//===============================================
#include "GDrawSDLColor.h"
#include "GShader.h"
//===============================================
GDrawSDLColor* GDrawSDLColor::m_instance = 0;
//===============================================
GDrawSDLColor::GDrawSDLColor() {

}
//===============================================
GDrawSDLColor::~GDrawSDLColor() {

}
//===============================================
GDrawSDLColor* GDrawSDLColor::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLColor;
    }
    return m_instance;
}
//===============================================
void GDrawSDLColor::initDraw() {
    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_layout.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_layout.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
}
//===============================================
void GDrawSDLColor::draw() {
    float lVertices[] = {-0.5f, -0.5f, 0.0f, 0.5f, 0.5f, -0.5f};
    float lColors[] = {
        1.0f, 0.0f, 0.0f,
        0.0f, 1.0f, 0.0f,
        0.0f, 0.0f, 1.0f,
    };
    glUseProgram(m_program);
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, lVertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, lColors);
    glEnableVertexAttribArray(1);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
