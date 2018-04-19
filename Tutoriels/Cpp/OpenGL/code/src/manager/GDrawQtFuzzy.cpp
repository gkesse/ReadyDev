//===============================================
#include "GDrawQtFuzzy.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtFuzzy* GDrawQtFuzzy::m_instance = 0;
//===============================================
GDrawQtFuzzy::GDrawQtFuzzy() {

}
//===============================================
GDrawQtFuzzy::~GDrawQtFuzzy() {
    m_angle = 0.0;
}
//===============================================
GDrawQtFuzzy* GDrawQtFuzzy::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtFuzzy;
    }
    return m_instance;
}
//===============================================
void GDrawQtFuzzy::initDraw() {
    float m_vertices[] = {
        -0.8f, -0.8f, 0.0f,
        0.8f, -0.8f, 0.0f,
        0.8f,  0.8f, 0.0f,
        -0.8f, -0.8f, 0.0f,
        0.8f, 0.8f, 0.0f,
        -0.8f, 0.8f, 0.0f
    };
    float tcData[] = {
        0.0f, 0.0f,
        1.0f, 0.0f,
        1.0f, 1.0f,
        0.0f, 0.0f,
        1.0f, 1.0f,
        0.0f, 1.0f
    };
    GLuint m_buffers[2];

    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_fuzzy.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_fuzzy.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);
    showActiveUniforms();
    initUniformBlockBuffer();

    glGenBuffers(2, m_buffers);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(m_vertices), m_vertices, GL_STATIC_DRAW);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(tcData), tcData, GL_STATIC_DRAW);

    glGenVertexArrays( 1, m_vertexArrays);
    glBindVertexArray(m_vertexArrays[0]);

    glEnableVertexAttribArray(0);
    glEnableVertexAttribArray(1);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glVertexAttribPointer(1, 2, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);
}
//===============================================
void GDrawQtFuzzy::draw() {
    glBindVertexArray(m_vertexArrays[0]);
    glDrawArrays(GL_TRIANGLES, 0, 6 );
}
//===============================================
void GDrawQtFuzzy::updateDraw() {
    m_angle += 1.0f*0.1f;
    if(m_angle >= 360.0f) m_angle -= 360.0f;
}
//===============================================
void GDrawQtFuzzy::showActiveUniforms() {
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
void GDrawQtFuzzy::initUniformBlockBuffer()
{
    GLuint blockIndex = glGetUniformBlockIndex(m_program, "BlobSettings");

    // Allocate space for the buffer
    GLint blockSize;
    glGetActiveUniformBlockiv(m_program, blockIndex,
                              GL_UNIFORM_BLOCK_DATA_SIZE, &blockSize);
    GLubyte * blockBuffer;
    blockBuffer = (GLubyte *) malloc(blockSize);

    // Query for the offsets of each block variable
    const GLchar *names[] = { "InnerColor", "OuterColor",
                              "RadiusInner", "RadiusOuter" };

    GLuint indices[4];
    glGetUniformIndices(m_program, 4, names, indices);

    GLint offset[4];
    glGetActiveUniformsiv(m_program, 4, indices, GL_UNIFORM_OFFSET, offset);

    // Store data within the buffer at the appropriate offsets
    GLfloat outerColor[] = {0.0f, 0.0f, 0.0f, 0.0f};
    GLfloat innerColor[] = {1.0f, 1.0f, 0.75f, 1.0f};
    GLfloat innerRadius = 0.25f, outerRadius = 0.45f;

    memcpy(blockBuffer + offset[0], innerColor, 4 * sizeof(GLfloat));
    memcpy(blockBuffer + offset[1], outerColor, 4 * sizeof(GLfloat));
    memcpy(blockBuffer + offset[2], &innerRadius, sizeof(GLfloat));
    memcpy(blockBuffer + offset[3], &outerRadius, sizeof(GLfloat));

    // Create the buffer object and copy the data
    GLuint uboHandle;
    glGenBuffers( 1, &uboHandle );
    glBindBuffer( GL_UNIFORM_BUFFER, uboHandle );
    glBufferData( GL_UNIFORM_BUFFER, blockSize, blockBuffer, GL_DYNAMIC_DRAW );

    // Bind the buffer object to the uniform block
    glBindBufferBase( GL_UNIFORM_BUFFER, blockIndex, uboHandle );
}
//===============================================
