//===============================================
#include "GOSXFactory.h"
#include "GOSXButton.h"
//===============================================
GOSXFactory* GOSXFactory::m_instance = 0;
//===============================================
GOSXFactory::GOSXFactory() {

}
//===============================================
GOSXFactory::~GOSXFactory() {

}
//===============================================
GOSXFactory* GOSXFactory::Instance() {
    if(m_instance == 0) {
        m_instance = new GOSXFactory;
    }
    return m_instance;
}
//===============================================
GButton* GOSXFactory::createButton() {
    return new GOSXButton;
}
//===============================================
