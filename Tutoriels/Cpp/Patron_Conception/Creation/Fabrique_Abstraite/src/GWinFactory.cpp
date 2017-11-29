//===============================================
#include "GWinFactory.h"
#include "GWinButton.h"
//===============================================
GWinFactory* GWinFactory::m_instance = 0;
//===============================================
GWinFactory::GWinFactory() {

}
//===============================================
GWinFactory::~GWinFactory() {

}
//===============================================
GWinFactory* GWinFactory::Instance() {
    if(m_instance == 0) {
        m_instance = new GWinFactory;
    }
    return m_instance;
}
//===============================================
GButton* GWinFactory::createButton() {
    return new GWinButton;
}
//===============================================
