//===============================================
#include "GTorus.h"
//===============================================
GTorus::GTorus() {

}
//===============================================
GTorus::GTorus(float outerRadius, float innerRadius, int nSides, int nRings) {
    m_rings = nRings;
    m_sides = nSides;
    m_faces = m_sides * m_rings;
    int nVertices  = m_sides * (m_rings + 1);

    float* m_vertices = new float[3 * nVertices];
    float* m_normals = new float[3 * nVertices];
    float* m_texCoords = new float[2 * nVertices];
    GLuint* m_indices = new GLuint[6 * m_faces];

    generateVertex(m_vertices, m_normals, m_texCoords, m_indices, outerRadius, innerRadius);

    GLuint m_buffers[4];
    glGenBuffers(4, m_buffers);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, (3 * nVertices) * sizeof(float), m_vertices, GL_STATIC_DRAW);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glBufferData(GL_ARRAY_BUFFER, (3 * nVertices) * sizeof(float), m_normals, GL_STATIC_DRAW);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[2]);
    glBufferData(GL_ARRAY_BUFFER, (2 * nVertices) * sizeof(float), m_texCoords, GL_STATIC_DRAW);

    glBindBuffer(GL_ELEMENT_ARRAY_BUFFER, m_buffers[3]);
    glBufferData(GL_ELEMENT_ARRAY_BUFFER, 6 * m_faces * sizeof(GLuint), m_indices, GL_STATIC_DRAW);

    delete [] m_vertices;
    delete [] m_normals;
    delete [] m_texCoords;
    delete [] m_indices;

    glGenVertexArrays( 1, m_vertexArrays);
    glBindVertexArray(m_vertexArrays[0]);

    glEnableVertexAttribArray(0);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glEnableVertexAttribArray(1);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[2]);
    glEnableVertexAttribArray(2);
    glVertexAttribPointer(2, 2, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ELEMENT_ARRAY_BUFFER, m_buffers[3]);
    glBindVertexArray(0);
}
//===============================================
GTorus::~GTorus() {

}
//===============================================
void GTorus::generateVertex(float* vertices, float* normals, float* texCoords, GLuint* indices, float outerRadius, float innerRadius) {
    float ringFactor  = (float)(TWOPI / m_rings);
    float sideFactor = (float)(TWOPI / m_sides);
    int idx = 0, tidx = 0;
    for( int ring = 0; ring <= m_rings; ring++ ) {
        float u = ring * ringFactor;
        float cu = cos(u);
        float su = sin(u);
        for( int side = 0; side < m_sides; side++ ) {
            float v = side * sideFactor;
            float cv = cos(v);
            float sv = sin(v);
            float r = (outerRadius + innerRadius * cv);

            vertices[idx] = r * cu;
            vertices[idx + 1] = r * su;
            vertices[idx + 2] = innerRadius * sv;

            normals[idx] = cv * cu * r;
            normals[idx + 1] = cv * su * r;
            normals[idx + 2] = sv * r;

            texCoords[tidx] = (float)(u / TWOPI);
            texCoords[tidx + 1] = (float)(v / TWOPI);

            tidx += 2;
            idx += 3;
        }
    }

    idx = 0;
    for(int ring = 0; ring < m_rings; ring++) {
        int ringStart = ring * m_sides;
        int nextRingStart = (ring + 1) * m_sides;
        for( int side = 0; side < m_sides; side++ ) {
            int nextSide = (side + 1) % m_sides;
            // The quad
            indices[idx] = (ringStart + side);
            indices[idx + 1] = (nextRingStart + side);
            indices[idx + 2] = (nextRingStart + nextSide);
            indices[idx + 3] = ringStart + side;
            indices[idx + 4] = nextRingStart + nextSide;
            indices[idx + 5] = (ringStart + nextSide);
            idx += 6;
        }
    }


}
void GTorus::render() const {
    glBindVertexArray(m_vertexArrays[0]);
    glDrawElements(GL_TRIANGLES, 6 * m_faces, GL_UNSIGNED_INT, BUFFER_OFFSET(0));
}
