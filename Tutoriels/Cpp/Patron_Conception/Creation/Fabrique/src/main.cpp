//===============================================
#include "GFactory.h"
//===============================================
int main(int argc, char** argv) {
    GShape* m_shape = 0;
    vector<GShape*> m_shapeMap;

    m_shape = GFactory::CreateShape(GFactory::Point);
    m_shape->setPoint(10.5, 11.7);
    m_shapeMap.push_back(m_shape);

    m_shape = GFactory::CreateShape(GFactory::Line);
    m_shape->setLine(20.3, 21.5, 22.7, 23.9);
    m_shapeMap.push_back(m_shape);

    m_shape = GFactory::CreateShape(GFactory::Rectangle);
    m_shapeMap.push_back(m_shape);

    m_shape = GFactory::CreateShape(GFactory::Ellipse);
    m_shapeMap.push_back(m_shape);

    for(int i = 0; i < m_shapeMap.size(); i++) {
        m_shape = m_shapeMap.at(i);
        m_shape->draw();
    }

    return 0;
}
//===============================================
