//================================================
#include "GDrawPoint.h"
#include "GAnimate.h"
//================================================
GDrawPoint* GDrawPoint::m_instance = 0;
//================================================
struct sGVertex {
    GLfloat x, y, z;
    GLfloat r, g, b, a;
};
//================================================
GDrawPoint::GDrawPoint() {

}
//================================================
GDrawPoint::~GDrawPoint() {

}
//================================================
GDrawPoint* GDrawPoint::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawPoint;
    }
    return m_instance;
}
//================================================
void GDrawPoint::draw() {
    GAnimate::Instance()->animate();
    for(int i = 0; i < 5; i++) {
        GLfloat lX = i*0.2;
        GLfloat lSize = 5.0 + i*5.0;
        GVertex lVertex = {lX, 0.0, 0.0, 1.0, 0.5, 0.5, 1.0};
        drawPoint(lVertex, lSize);
    }
}
//================================================
void GDrawPoint::drawPoint(const GVertex& v, const GLfloat& size) {
    glPointSize(size);
    glBegin(GL_POINTS);
    glColor4f(v.r, v.g, v.b, v.a);
    glVertex3f(v.x, v.y, v.z);
    glEnd();
}
//================================================
