//===============================================
#include "GObjTorus.h"
#include "GShader.h"
//===============================================
GObjTorus::GObjTorus() {

}
//===============================================
GObjTorus::GObjTorus(float outerRadius, float innerRadius, int verticalSides, int horizontalSides) {
    initObject(outerRadius, innerRadius, verticalSides, horizontalSides);
}
//===============================================
GObjTorus::~GObjTorus() {

}
//===============================================
void GObjTorus::initObject(float outerRadius, float innerRadius, int verticalSides, int horizontalSides) {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_light_diffuse.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_light_diffuse.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    m_horizontalSides = horizontalSides;
    m_verticalSides = verticalSides;
    m_faces = m_verticalSides * m_horizontalSides;
    int lVertexNum  = m_verticalSides * (m_horizontalSides + 1);

    float* lVertices = new float[3 * lVertexNum];
    float* lNormals = new float[3 * lVertexNum];
    float* lTexCoords = new float[2 * lVertexNum];
    uint* lIndices = new uint[6 * m_faces];

    generateVertex(lVertices, lNormals, lTexCoords, lIndices, outerRadius, innerRadius);

    GLuint lBuffers[4];
    glGenBuffers(4, lBuffers);

    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[0]);
    glBufferData(GL_ARRAY_BUFFER, (3 * lVertexNum) * sizeof(float), lVertices, GL_STATIC_DRAW);

    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[1]);
    glBufferData(GL_ARRAY_BUFFER, (3 * lVertexNum) * sizeof(float), lNormals, GL_STATIC_DRAW);

    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[2]);
    glBufferData(GL_ARRAY_BUFFER, (2 * lVertexNum) * sizeof(float), lTexCoords, GL_STATIC_DRAW);

    glBindBuffer(GL_ELEMENT_ARRAY_BUFFER, lBuffers[3]);
    glBufferData(GL_ELEMENT_ARRAY_BUFFER, 6 * m_faces * sizeof(uint), lIndices, GL_STATIC_DRAW);

    delete[] lVertices;
    delete[] lNormals;
    delete[] lTexCoords;
    delete[] lIndices;

    glGenVertexArrays(1, &m_VAO);
    glBindVertexArray(m_VAO);

    glEnableVertexAttribArray(0);
    glEnableVertexAttribArray(1);
    glEnableVertexAttribArray(2);

    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[1]);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[2]);
    glVertexAttribPointer(2, 2, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ELEMENT_ARRAY_BUFFER, lBuffers[3]);
    glBindVertexArray(0);
}
//===============================================
void GObjTorus::generateVertex(float* vertices, float* normals, float* texCoords, GLuint* indices, float outerRadius, float innerRadius) {
    float lHorizontalSide  = (float)(TWOPI / m_horizontalSides);
    float lVerticalSide = (float)(TWOPI / m_verticalSides);
    int idx = 0, Tidx = 0;
    for(int i = 0; i <= m_horizontalSides; i++) {
        float u = i * lHorizontalSide;
        float cu = cos(u);
        float su = sin(u);
        for(int j = 0; j < m_verticalSides; j++) {
            float v = j * lVerticalSide;
            float cv = cos(v);
            float sv = sin(v);
            float r = (outerRadius + innerRadius * cv);

            vertices[idx + 0] = r * cu;
            vertices[idx + 1] = r * su;
            vertices[idx + 2] = innerRadius * sv;

            normals[idx + 0] = cv * cu * r;
            normals[idx + 1] = cv * su * r;
            normals[idx + 2] = sv * r;

            texCoords[Tidx + 0] = (float)(u / TWOPI);
            texCoords[Tidx + 1] = (float)(v / TWOPI);

            Tidx += 2;
            idx += 3;
        }
    }

    idx = 0;
    for(int i = 0; i < m_horizontalSides; i++) {
        int lHorizontalSide = i * m_verticalSides;
        int lNextHorizontalSide = (i + 1) * m_verticalSides;
        for(int j = 0; j < m_verticalSides; j++) {
            int lNextVerticalSide = (j + 1) % m_verticalSides;

            indices[idx + 0] = (lHorizontalSide + j);
            indices[idx + 1] = (lNextHorizontalSide + j);
            indices[idx + 2] = (lNextHorizontalSide + lNextVerticalSide);
            indices[idx + 3] = lHorizontalSide + j;
            indices[idx + 4] = lNextHorizontalSide + lNextVerticalSide;
            indices[idx + 5] = (lHorizontalSide + lNextVerticalSide);

            idx += 6;
        }
    }
}
//===============================================
void GObjTorus::draw(const glm::mat4& projection, const glm::mat4& modelView, const glm::mat4& view) {
    glBindVertexArray(m_VAO);
    GShader::Instance()->setUniform(m_program, "Kd", 0.9f, 0.5f, 0.3f);
    GShader::Instance()->setUniform(m_program, "Ld", 1.0f, 1.0f, 1.0f);
    GShader::Instance()->setUniform(m_program, "LightPosition", glm::vec4(5.0f,5.0f,2.0f,1.0f));
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", modelView);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", projection);
    GShader::Instance()->setUniform(m_program, "ViewMatrix", view);
    glDrawElements(GL_TRIANGLES, 6 * m_faces, GL_UNSIGNED_INT, BUFFER_OFFSET(0));
}
//===============================================
