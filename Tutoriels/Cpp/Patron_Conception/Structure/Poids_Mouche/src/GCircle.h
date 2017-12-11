//===============================================
#ifndef _GCircle_
#define _GCircle_
//===============================================
#include "GShape.h"
//===============================================
class GCircle : public GShape {
public:
    GCircle();
    GCircle(const string& color);
    ~GCircle();

public:
    static GCircle* Create(const string& color);
    void setX(const int& x);
    void setY(const int& y);
    void setRadius(const int& radius);
    void setColor(const string& radius);
    void draw();

private:
    int m_x;
    int m_y;
    int m_radius;
    string m_color;
    static map<string, GCircle*> m_circleMap;
};
//===============================================
#endif
//===============================================
