//===============================================
#include "GCircle.h"
//===============================================
map<string, GCircle*> GCircle::m_circleMap;
//===============================================
GCircle::GCircle() {
    m_x = 0;
    m_y = 0;
    m_radius = 0;
    m_color = "";
}
//===============================================
GCircle::GCircle(const string& color) {
    m_x = 0;
    m_y = 0;
    m_radius = 0;
    m_color = color;
    cout << "Circle : Create Circle " << color << "...\n";
}
//===============================================
GCircle::~GCircle() {

}
//===============================================
GCircle* GCircle::Create(const string& color) {
    map<string, GCircle*>::iterator it;
    it = m_circleMap.find(color);
    if(it == m_circleMap.end()) {
        GCircle* m_circle = new GCircle(color);
        m_circleMap[color] = m_circle;
    }
    return m_circleMap[color];
}
//===============================================
void GCircle::setX(const int& x) {
    m_x = x;
}
//===============================================
void GCircle::setY(const int& y) {
    m_y = y;
}
//===============================================
void GCircle::setRadius(const int& radius) {
    m_radius = radius;
}
//===============================================
void GCircle::setColor(const string& color) {
    m_color = color;
}
//===============================================
void GCircle::draw() {
    cout << "Flyweight : Draw Circle | ";
    cout << "x : " << m_x << " - ";
    cout << "y : " << m_y << " - ";
    cout << "radius : " << m_radius << " - ";
    cout << "color : " << m_color << "\n";
}
//===============================================
