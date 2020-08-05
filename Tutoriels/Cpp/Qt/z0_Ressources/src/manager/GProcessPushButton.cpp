//===============================================
#include "GProcessPushButton.h"
#include "GStyle.h"
#include "GPushButton.h"
//===============================================
GProcessPushButton* GProcessPushButton::m_instance = 0;
//===============================================
GProcessPushButton::GProcessPushButton() {

}
//===============================================
GProcessPushButton::~GProcessPushButton() {

}
//===============================================
GProcessPushButton* GProcessPushButton::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPushButton;
    }
    return m_instance;
}
//===============================================
void GProcessPushButton::run() {
    GStyle::Instance()->load("res/css/style.css");
    GPushButton* lWindow = new GPushButton;
    lWindow->show();
}
//===============================================
