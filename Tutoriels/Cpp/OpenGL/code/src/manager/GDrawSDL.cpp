//===============================================
#include "GDrawSDL.h"
#include "GVertex.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawSDL* GDrawSDL::m_instance = 0;
//===============================================
GDrawSDL::GDrawSDL() {

}
//===============================================
GDrawSDL::~GDrawSDL() {

}
//===============================================
GDrawSDL* GDrawSDL::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDL;
    }
    return m_instance;
}
//===============================================
void GDrawSDL::initDraw() {
    float n_vertices[] = {-0.5, -0.5, 0.0, 0.5, 0.5, -0.5};
    GVertex::Instance()->loadVertex1D(m_vertices, n_vertices, 0, 6);
    float n_colors[] = {
        5.0/255.0, 16.0/255.0, 57.0/255.0,
        5.0/255.0, 16.0/255.0, 57.0/255.0,
        5.0/255.0, 16.0/255.0, 57.0/255.0
    };
    GVertex::Instance()->loadVertex1D(m_colors, n_colors, 0, 9);
    GShaderInfo m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/color/color.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/color/color.frag", 0},
        {GL_NONE, "", 0}
    };
    m_program =  GShader::Instance()->loadShader(m_shaders);
}
//===============================================
void GDrawSDL::draw() {
    glUseProgram(m_program);
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, m_vertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, m_colors);
    glEnableVertexAttribArray(1);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
