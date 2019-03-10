//================================================
#include "GDrawBox.h"
#include "GVision.h"
#include "GMath.h"
#include "GMouse.h"
//================================================
GDrawBox* GDrawBox::m_instance = 0;
//================================================
GDrawBox::GDrawBox() {
    m_x1 = -1;
    m_y1 = -1;
    m_x2 = -1;
    m_y2 = -1;
    m_mouseState = "NONE";
}
//================================================
GDrawBox::~GDrawBox() {

}
//================================================
GDrawBox* GDrawBox::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawBox;
    }
    return m_instance;
}
//================================================
void GDrawBox::draw(const string &imageName) {
    if(GMouse::Instance()->getEvent() == cv::EVENT_LBUTTONDOWN) {
        if(m_mouseState == "NONE") {m_mouseState = "DOWN";}
        else if(m_mouseState == "MOVE") {m_mouseState = "DOWN_2";}
        else if(m_mouseState == "UP_2") {m_mouseState = "NONE";}

        if(m_mouseState == "DOWN") {
            m_x1 = GMouse::Instance()->getX();
            m_y1 = GMouse::Instance()->getY();
            m_x2 = m_x1;
            m_y2 = m_y1;
        }
    }
    if(GMouse::Instance()->getEvent() == cv::EVENT_MOUSEMOVE) {
        if(m_mouseState == "UP") {m_mouseState = "MOVE";}
        else if(m_mouseState == "DOWN") {m_mouseState = "NONE";}

        if(m_mouseState == "MOVE") {
            m_x2 = GMouse::Instance()->getX();
            m_y2 = GMouse::Instance()->getY();
        }
    }
    if(GMouse::Instance()->getEvent() == cv::EVENT_LBUTTONUP) {
        if(m_mouseState == "DOWN") {m_mouseState = "UP";}
        if(m_mouseState == "DOWN_2") {m_mouseState = "UP_2";}
    }
    GVision::Instance()->rectangle(imageName, m_x1, m_y1, m_x2, m_y2, 255, 0, 0, 2);
}
//================================================
