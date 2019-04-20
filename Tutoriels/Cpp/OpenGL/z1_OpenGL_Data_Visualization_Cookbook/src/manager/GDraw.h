//================================================
#ifndef _GDraw_
#define _GDraw_
//================================================
#include "GInclude.h"
//================================================
class GDraw {
public:
    GDraw();
    ~GDraw();
	
public:
    static GDraw* Instance();
    void setDivX(const double &divX, const double &valX);
    void setDivY(const double &divY, const double &valY);
    void setDivS(const double &divXs, const double &divYs);
    double divX(const double &valX);
    double divXs(const double &valX);
    double divY(const double &valX);
    double divYs(const double &valY);
    void drawGrid(const double &w, const double &h, const GColor &color);
    void drawAxis(const double &w, const double &h, const double &size, const GColor &color);
    void drawPoint(const GVertex& vertex, const GColor& color, const double &size);
    void drawPoints(const GVertex* vertex, const int& n, const GColor& color, const double &size);
    void drawLine(const GVertex* vertex, const GColor& color, const double &width);
    void drawLines(const GVertex* vertex, const int &n, const GColor& color, const double &width);

private:
    static GDraw* m_instance;
    double m_divX, m_divXs, m_valX;
    double m_divY, m_divYs, m_valY;
};
//================================================
#endif
//================================================
