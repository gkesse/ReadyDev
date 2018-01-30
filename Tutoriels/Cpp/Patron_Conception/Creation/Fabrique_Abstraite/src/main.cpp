//===============================================
#include "GAbstractFactory.h"
#include "GButton.h"
//===============================================
int main(int argc, char** argv) {
    GAbstractFactory* m_absFactory = 0;
    GButton* m_button = 0;

    m_absFactory = GAbstractFactory::Create("Win");
    m_button = m_absFactory->createButton();
    m_button->paint();

    m_absFactory = GAbstractFactory::Create("OSX");
    m_button = m_absFactory->createButton();
    m_button->paint();

    return 0;
}
//===============================================
