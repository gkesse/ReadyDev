//===============================================
#include "GDrawQtUniformBlock.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtUniformBlock* GDrawQtUniformBlock::m_instance = 0;
//===============================================
GDrawQtUniformBlock::GDrawQtUniformBlock() {

}
//===============================================
GDrawQtUniformBlock::~GDrawQtUniformBlock() {
    m_angle = 0.0;
}
//===============================================
GDrawQtUniformBlock* GDrawQtUniformBlock::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtUniformBlock;
    }
    return m_instance;
}
//===============================================
void GDrawQtUniformBlock::initDraw() {
    float m_vertices[] = {
        -0.8f, -0.8f, 0.0f,
        0.8f, -0.8f, 0.0f,
        0.8f,  0.8f, 0.0f,
        -0.8f, -0.8f, 0.0f,
        0.8f, 0.8f, 0.0f,
        -0.8f, 0.8f, 0.0f
    };
    float m_coords[] = {
        0.0f, 0.0f,
        1.0f, 0.0f,
        1.0f, 1.0f,
        0.0f, 0.0f,
        1.0f, 1.0f,
        0.0f, 1.0f
    };
    GLuint m_buffers[2];

    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_uniform_block.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_uniform_block.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);
    GShader::Instance()->showActiveUniforms();
    initUniformBlockBuffer();

    glGenBuffers(2, m_buffers);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(m_vertices), m_vertices, GL_STATIC_DRAW);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(m_coords), m_coords, GL_STATIC_DRAW);

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
void GDrawQtUniformBlock::draw() {
    glBindVertexArray(m_vertexArrays[0]);
    glDrawArrays(GL_TRIANGLES, 0, 6 );
}
//===============================================
void GDrawQtUniformBlock::initUniformBlockBuffer() {
    GLuint m_blockIndex = glGetUniformBlockIndex(m_program, "BlobSettings");

    GLint m_blockSize;
    glGetActiveUniformBlockiv(m_program, m_blockIndex, GL_UNIFORM_BLOCK_DATA_SIZE, &m_blockSize);

    GLubyte* m_blockBuffer = new GLubyte[m_blockSize];

    const GLchar* m_names[] = {"InnerColor", "OuterColor", "RadiusInner", "RadiusOuter"};

    GLuint m_indices[4];
    glGetUniformIndices(m_program, 4, m_names, m_indices);

    GLint m_offset[4];
    glGetActiveUniformsiv(m_program, 4, m_indices, GL_UNIFORM_OFFSET, m_offset);

    GLfloat m_outerColor[] = {0.0f, 0.0f, 0.0f, 0.0f, 1.0f};
    GLfloat m_innerColor[] = {1.0f, 1.0f, 0.75f, 1.0f, 1.0f};
    GLfloat m_innerRadius = 0.25f;
    GLfloat m_outerRadius = 0.45f;

    memcpy(m_blockBuffer + m_offset[0], m_innerColor, sizeof(m_innerColor));
    memcpy(m_blockBuffer + m_offset[1], m_outerColor, sizeof(m_outerColor));
    memcpy(m_blockBuffer + m_offset[2], &m_innerRadius, sizeof(m_innerRadius));
    memcpy(m_blockBuffer + m_offset[3], &m_outerRadius, sizeof(m_outerRadius));

    GLuint m_buffers[1];
    glGenBuffers(1, m_buffers);
    glBindBuffer(GL_UNIFORM_BUFFER, m_buffers[0]);
    glBufferData(GL_UNIFORM_BUFFER, m_blockSize, m_blockBuffer, GL_DYNAMIC_DRAW);
    glBindBufferBase(GL_UNIFORM_BUFFER, m_blockIndex, m_buffers[0]);
}
//===============================================
