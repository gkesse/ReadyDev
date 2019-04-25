//================================================
#include "GDraw.h"
#include "GOpenGL.h"
//================================================
GDraw* GDraw::m_instance = 0;
//================================================
GDraw::GDraw() {

}
//================================================
GDraw::~GDraw() {
	
}
//================================================
GDraw* GDraw::Instance() {
	if(m_instance == 0) {
        m_instance = new GDraw;
	}
	return m_instance;
}
//================================================
void GDraw::setDivX(const double &divX, const double& valX) {
    m_divX = divX;
    m_valX = valX;
}
//================================================
void GDraw::setDivY(const double &divY, const double& valY) {
    m_divY = divY;
    m_valY = valY;
}
//================================================
void GDraw::setDivS(const double &divXs, const double& divYs) {
    m_divXs = divXs;
    m_divYs = divYs;
}
//================================================
double GDraw::divX(const double &valX) {
    double lDivX = (m_divX * valX) / m_valX;
    return lDivX;
}
//================================================
double GDraw::divXs(const double &valX) {
    double lDivX = (m_divX * valX) / m_valX;
    double lDivXs = (lDivX * m_divXs);
    return lDivXs;
}
//================================================
double GDraw::divY(const double &valY) {
    double lDivY = (m_divY * valY) / m_valY;
    return lDivY;
}
//================================================
double GDraw::divYs(const double &valY) {
    double lDivY = (m_divY * valY) / m_valY;
    double lDivYs = (lDivY * m_divYs);
    return lDivYs;
}
//================================================
GVertex* GDraw::divS(const GVertex* vertex, const int& nVertex) {
    GVertex* lVertex = new GVertex[nVertex];
    for(int i = 0; i < nVertex; i++) {
        lVertex[i] = {divXs(vertex[i].x), divYs(vertex[i].y), 0.0};
    }
    return lVertex;
}
//================================================
void GDraw::drawGrid(const double& w, const double& h, const GColor& color) {
    for(double i = -h; i < h; i += m_divXs) {
        GVertex lVertex[] = {
            {-w, i, 0.0},
            {w, i, 0.0}
        };
        GColor lColor[] = {color, color};
        GOpenGL::Instance()->drawLine(lVertex, lColor, 1.0);
    }
    for(double i = -w; i < w; i += m_divYs) {
        GVertex lVertex[] = {
            {i, -h, 0.0},
            {i, h, 0.0}
        };
        GColor lColor[] = {color, color};
        GOpenGL::Instance()->drawLine(lVertex, lColor, 1.0);
    }
}
//================================================
void GDraw::drawAxis(const double& w, const double& h, const double& size, const GColor& color) {
    GVertex lVertex1[] = {
        {-w, 0.0, 0.0},
        {w, 0.0, 0.0}
    };
    GColor lColor1[] = {color, color};
    GOpenGL::Instance()->drawLine(lVertex1, lColor1, size);

    GVertex lVertex2[] = {
        {0.0, -h, 0.0},
        {0.0, h, 0.0}
    };
    GColor lColor2[] = {color, color};
    GOpenGL::Instance()->drawLine(lVertex2, lColor2, size);
}
//================================================
void GDraw::drawPoint(const GVertex& vertex, const GColor& color, const double &pointSize) {
    GVertex lVertex = {divXs(vertex.x), divYs(vertex.y), 0.0};
    GOpenGL::Instance()->drawPoint(lVertex, color, pointSize);
}
//================================================
void GDraw::drawPoints(const GVertex* vertex, const GColor& color, const double &pointSize, const int &nVertex) {
    for(int i = 0; i < nVertex; i++) {
        GVertex lVertex = vertex[i];
        drawPoint(lVertex, color, pointSize);
    }
}
//================================================
void GDraw::drawPoints2(const GVertex* vertex, const GColor& color, const double &pointSize, const int &nVertex) {
    GVertex* lVertex = divS(vertex, nVertex);
    GOpenGL::Instance()->drawPoints(lVertex, color, pointSize, nVertex);
    delete[] lVertex;
}
//================================================
void GDraw::drawLine(const GVertex* vertex, const GColor& color, const double &width) {
    GVertex lVertex[] = {
        {divXs(vertex[0].x), divYs(vertex[0].y), 0.0},
        {divXs(vertex[1].x), divYs(vertex[1].y), 0.0}
    };
    GColor lColor[] = {color, color};
    GOpenGL::Instance()->drawLine(lVertex, lColor, width);
}
//================================================
void GDraw::drawLines(const GVertex* vertex, const GColor& color, const double &width, const int &nVertex) {
    for(int i = 0; i < nVertex - 1; i++) {
        GVertex lVertex[] = {vertex[i], vertex[i + 1]};
        drawLine(lVertex, color, width);
    }
}
//================================================
void GDraw::drawLines2(const GVertex* vertex, const GColor& color, const double &width, const int &nVertex) {
    GVertex* lVertex = divS(vertex, nVertex);
    GOpenGL::Instance()->drawLines(lVertex, color, width, nVertex);
    delete[] lVertex;
}
//================================================

