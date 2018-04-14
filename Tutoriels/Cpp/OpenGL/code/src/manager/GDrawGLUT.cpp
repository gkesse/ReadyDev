//===============================================
#include "GDrawGLUT.h"
//===============================================
GDrawGLUT* GDrawGLUT::m_instance = 0;
//===============================================
GDrawGLUT::GDrawGLUT() {

}
//===============================================
GDrawGLUT::~GDrawGLUT() {

}
//===============================================
GDrawGLUT* GDrawGLUT::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawGLUT;
    }
    return m_instance;
}
//===============================================
void GDrawGLUT::setVertices() {

}
//===============================================
void GDrawGLUT::draw() {
    float m_red = 55.0/255.0;
    float m_green = 63.0/255.0;
    float m_blue = 96.0/255.0;

    glColor3f(m_red, m_green, m_blue);

    float m_width = 0.5;
    float m_height = 0.5;
    float m_depth = 0.5;
    btVector3 m_vertices[8] = {
        btVector3(m_width, m_height, m_depth),
        btVector3(-m_width, m_height, m_depth),
        btVector3(m_width, -m_height, m_depth),
        btVector3(-m_width, -m_height, m_depth),
        btVector3(m_width, m_height, -m_depth),
        btVector3(-m_width, m_height, -m_depth),
        btVector3(m_width, -m_height, -m_depth),
        btVector3(-m_width, -m_height, -m_depth)
    };
    int m_indices[36] = {
        0,1,2,
        3,2,1,
        4,0,6,
        6,0,2,
        5,1,4,
        4,1,0,
        7,3,1,
        7,1,5,
        5,4,7,
        7,4,6,
        7,2,3,
        7,6,2
    };

    glBegin(GL_TRIANGLES);

    for(int i = 0; i < 36; i += 3) {
        const btVector3 &m_vert1 = m_vertices[m_indices[i]];
        const btVector3 &m_vert2 = m_vertices[m_indices[i+1]];
        const btVector3 &m_vert3 = m_vertices[m_indices[i+2]];

        btVector3 m_normal = (m_vert3-m_vert1).cross(m_vert2-m_vert1);
        m_normal.normalize ();

        glNormal3f(m_normal.getX(), m_normal.getY(), m_normal.getZ());

        glVertex3f(m_vert1.x(), m_vert1.y(), m_vert1.z());
        glVertex3f(m_vert2.x(), m_vert2.y(), m_vert2.z());
        glVertex3f(m_vert3.x(), m_vert3.y(), m_vert3.z());
    }
    glEnd();
}
//===============================================
