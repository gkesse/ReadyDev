//================================================
#include "GDrawTriangle.h"
#include "GAnimate.h"
//================================================
GDrawTriangle* GDrawTriangle::m_instance = 0;
//================================================
struct sGVertex {
    GLfloat x, y, z;
    GLfloat r, g, b, a;
};
//================================================
GDrawTriangle::GDrawTriangle() {

}
//================================================
GDrawTriangle::~GDrawTriangle() {
	
}
//================================================
GDrawTriangle* GDrawTriangle::Instance() {
	if(m_instance == 0) {
        m_instance = new GDrawTriangle;
	}
	return m_instance;
}
//================================================
void GDrawTriangle::draw() {
    GAnimate::Instance()->animate();
    GVertex lVertex1 = {-0.5, -0.5, 0.0, 1.0, 0.5, 0.5, 1.0};
    GVertex lVertex2 = {0.5, -0.5, 0.0, 1.0, 0.5, 0.5, 1.0};
    GVertex lVertex3 = {0.0, 0.5, 0.0, 1.0, 0.5, 0.5, 1.0};
    drawTriangle(lVertex1, lVertex2, lVertex3);
}
//================================================
void GDrawTriangle::drawTriangle(const GVertex& v1, const GVertex& v2, const GVertex& v3) {
    glBegin(GL_TRIANGLES);
    glColor4f(v1.r, v1.g, v1.b, v1.a);
    glVertex3f(v1.x, v1.y, v1.z);
    glColor4f(v2.r, v2.g, v2.b, v2.a);
    glVertex3f(v2.x, v2.y, v2.z);
    glColor4f(v3.r, v3.g, v3.b, v3.a);
    glVertex3f(v3.x, v3.y, v3.z);
    glEnd();
}
//================================================
