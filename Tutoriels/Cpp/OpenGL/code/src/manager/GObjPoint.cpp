//===============================================
#include "GObjPoint.h"
//===============================================
#include <QtMath>
//===============================================
GObjPoint::GObjPoint(int Umax, int Rmax, float PointSize) {
    float du = 360.0f/Umax;
    float dr = 0.95f/Rmax;
    for(int i = 0; i < Umax; i++) {
        for(int j = 0; j < Rmax; j++) {
            if(j == 0 && i != 0) continue;
            float u = i*du;
            float uRad = u*M_PI/180;
            float r = j*dr;
            float x = r*qCos(uRad);
            float y = r*qSin(uRad);
            float lRed = ((i % 3) == 0) ? 1.0f : 0.0f;
            float lGreen = ((i % 3) == 1) ? 1.0f : 0.0f;
            float lBlue = ((i % 3) == 2) ? 1.0f : 0.0f;
            GVertexInfo lVertex = {x, y, 0.0f, lRed, lGreen, lBlue, 1.0f};
            setAntiAliasing();
            glPointSize(PointSize);
            glBegin(GL_POINTS);
            glColor3f(lVertex.r, lVertex.g, lVertex.b);
            glVertex3f(lVertex.x, lVertex.y, lVertex.z);
            glEnd();
        }
    }
}
//===============================================
GObjPoint::~GObjPoint() {

}
//===============================================
