//===============================================
#include "GTorus.h"
//===============================================
GTorus::GTorus() {

}
//===============================================
GTorus::GTorus(float outerRadius, float innerRadius, int nsides, int nrings) {
    rings = nrings;
    sides = nsides;
    faces = sides * rings;
    int nVerts  = sides * (rings + 1);   // One extra ring to duplicate first ring

    // Verts
    float* m_vertices = new float[3 * nVerts];
    // Normals
    float* m_normals = new float[3 * nVerts];
    // Tex coords
    float* m_texCoords = new float[2 * nVerts];
    // Elements
    unsigned int* m_elements = new unsigned int[6 * faces];

    // Generate the vertex data
    generateVerts(m_vertices, m_normals, m_texCoords, m_elements, outerRadius, innerRadius);

    // Create and populate the buffer objects
    GLuint m_buffers[4];
    glGenBuffers(4, m_buffers);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, (3 * nVerts) * sizeof(float), m_vertices, GL_STATIC_DRAW);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glBufferData(GL_ARRAY_BUFFER, (3 * nVerts) * sizeof(float), m_normals, GL_STATIC_DRAW);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[2]);
    glBufferData(GL_ARRAY_BUFFER, (2 * nVerts) * sizeof(float), m_texCoords, GL_STATIC_DRAW);

    glBindBuffer(GL_ELEMENT_ARRAY_BUFFER, m_buffers[3]);
    glBufferData(GL_ELEMENT_ARRAY_BUFFER, 6 * faces * sizeof(unsigned int), m_elements, GL_STATIC_DRAW);

    delete [] m_vertices;
    delete [] m_normals;
    delete [] m_texCoords;
    delete [] m_elements;

    // Create the VAO
    glGenVertexArrays( 1, m_vertexArrays);
    glBindVertexArray(m_vertexArrays[0]);

    glEnableVertexAttribArray(0);  // Vertex position
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glEnableVertexAttribArray(1);  // Vertex normal
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[2]);
    glEnableVertexAttribArray(2);  // Texture coords
    glVertexAttribPointer(2, 2, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ELEMENT_ARRAY_BUFFER, m_buffers[3]);
    glBindVertexArray(0);
}
//===============================================
GTorus::~GTorus() {

}
//===============================================
void GTorus::generateVerts(float* verts, float* norms, float* tex, unsigned int* el, float outerRadius, float innerRadius) {
    float ringFactor  = (float)(TWOPI / rings);
    float sideFactor = (float)(TWOPI / sides);
    int idx = 0, tidx = 0;
    for( int ring = 0; ring <= rings; ring++ ) {
        float u = ring * ringFactor;
        float cu = cos(u);
        float su = sin(u);
        for( int side = 0; side < sides; side++ ) {
            float v = side * sideFactor;
            float cv = cos(v);
            float sv = sin(v);
            float r = (outerRadius + innerRadius * cv);
            verts[idx] = r * cu;
            verts[idx + 1] = r * su;
            verts[idx + 2] = innerRadius * sv;
            norms[idx] = cv * cu * r;
            norms[idx + 1] = cv * su * r;
            norms[idx + 2] = sv * r;
            tex[tidx] = (float)(u / TWOPI);
            tex[tidx+1] = (float)(v / TWOPI);
            tidx += 2;
            // Normalize
            float len = sqrt(norms[idx] * norms[idx] + norms[idx+1] * norms[idx+1] + norms[idx+2] * norms[idx+2]);
            norms[idx] /= len;
            norms[idx+1] /= len;
            norms[idx+2] /= len;
            idx += 3;
        }
    }

    idx = 0;
    for( int ring = 0; ring < rings; ring++ ) {
        int ringStart = ring * sides;
        int nextRingStart = (ring + 1) * sides;
        for( int side = 0; side < sides; side++ ) {
            int nextSide = (side+1) % sides;
            // The quad
            el[idx] = (ringStart + side);
            el[idx+1] = (nextRingStart + side);
            el[idx+2] = (nextRingStart + nextSide);
            el[idx+3] = ringStart + side;
            el[idx+4] = nextRingStart + nextSide;
            el[idx+5] = (ringStart + nextSide);
            idx += 6;
        }
    }


}
void GTorus::render() const {
    glBindVertexArray(m_vertexArrays[0]);
    glDrawElements(GL_TRIANGLES, 6 * faces, GL_UNSIGNED_INT, BUFFER_OFFSET(0));
}
