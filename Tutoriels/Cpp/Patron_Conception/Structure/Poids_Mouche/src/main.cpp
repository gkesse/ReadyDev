//===============================================
#include "GShape.h"
#include "GCircle.h"
//===============================================
int main(int argc, char** argv) {
    GCircle* m_circle = 0;
    string m_colors[] = {"Red", "Green", "Blue"};
    int m_size = sizeof(m_colors)/sizeof(string);

    for(int i = 0; i < 6; i++) {
        int j = i % m_size;
        m_circle = GCircle::Create(m_colors[j]);
        m_circle->setX(10 + i);
        m_circle->setY(20 + i);
        m_circle->setRadius(30 + i);
        m_circle->draw();
    }
}
//===============================================
