//===============================================
#include "GDrawQtUniform.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtUniform* GDrawQtUniform::m_instance = 0;
//===============================================
GDrawQtUniform::GDrawQtUniform() {

}
//===============================================
GDrawQtUniform::~GDrawQtUniform() {
    m_angle = 0.0;
}
//===============================================
GDrawQtUniform* GDrawQtUniform::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtUniform;
    }
    return m_instance;
}
//===============================================
void GDrawQtUniform::initDraw() {
    float m_vertices[] = {
        -0.8f, -0.8f, 0.0f,
        0.8f, -0.8f, 0.0f,
        0.0f,  0.8f, 0.0f
    };
    float m_colors[] = {
        1.0f, 0.0f, 0.0f,
        0.0f, 1.0f, 0.0f,
        0.0f, 0.0f, 1.0f
    };
    GLuint m_buffers[2];

    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_uniform.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_uniform.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);
    showActiveUniforms();

    glGenBuffers(2, m_buffers);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(m_vertices), m_vertices, GL_STATIC_DRAW);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(m_colors), m_colors, GL_STATIC_DRAW);

    glGenVertexArrays( 1, m_vertexArrays);
    glBindVertexArray(m_vertexArrays[0]);

    glEnableVertexAttribArray(0);
    glEnableVertexAttribArray(1);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
}
//===============================================
void GDrawQtUniform::draw() {
    glm::mat4 m_rotationMatrix = glm::rotate(glm::mat4(1.0f), m_angle, glm::vec3(0.0f,0.0f,1.0f));
    GLuint m_location = glGetUniformLocation(m_program, "RotationMatrix");
    if(m_location >= 0) {
        glUniformMatrix4fv(m_location, 1, GL_FALSE, &m_rotationMatrix[0][0]);
    }
    glBindVertexArray(m_vertexArrays[0]);
    glDrawArrays(GL_TRIANGLES, 0, 3);
}
//===============================================
void GDrawQtUniform::updateDraw() {
    m_angle += 1.0f*0.1f;
    if(m_angle >= 360.0f) m_angle -= 360.0f;
}
//===============================================
void GDrawQtUniform::showActiveUniforms() {
    GLint m_uniforms, m_size, m_location, m_maxLen;
    GLchar* m_name;
    GLsizei m_written;
    GLenum m_type;

    glGetProgramiv(m_program, GL_ACTIVE_UNIFORM_MAX_LENGTH, &m_maxLen);
    glGetProgramiv(m_program, GL_ACTIVE_UNIFORMS, &m_uniforms);

    m_name = new GLchar[m_maxLen];

    for( int i = 0; i < m_uniforms; ++i ) {
        glGetActiveUniform(m_program, i, m_maxLen, &m_written, &m_size, &m_type, m_name);
        m_location = glGetUniformLocation(m_program, m_name);
        cout << "LOCATION: " << m_location << " | ";
        cout << "NAME: " << m_name << "\n";
    }

    delete[] m_name;
}
//===============================================
