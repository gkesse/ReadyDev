//===============================================
#include "GQtPushButton.h"
//===============================================
GQtPushButton* GQtPushButton::m_instance = 0;
//===============================================
GQtPushButton::GQtPushButton() {

}
//===============================================
GQtPushButton::~GQtPushButton() {

}
//===============================================
GQtPushButton* GQtPushButton::Instance() {
    if(m_instance == 0) {
        m_instance = new GQtPushButton;
    }
    return m_instance;
}
//===============================================
