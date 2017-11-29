//===============================================
#include "GController.h"
//===============================================
GController* GController::m_instance = 0;
//===============================================
GController::GController() {
    m_trafficA = GTraffic::Create("TrafficA");
    m_trafficB = GTraffic::Create("TrafficB");
    initSystem();
}
//===============================================
GController::~GController() {

}
//===============================================
GController* GController::Instance() {
    if(m_instance == 0) {
        m_instance = new GController;
    }
    return m_instance;
}
//===============================================
void GController::initSystem() {
    m_trafficA->red();
    m_trafficB->red();
    cout << "-------------------------------------------------\n";
}
//===============================================
void GController::greenState() {
    m_trafficA->green();
    m_trafficB->red();
    cout << "-------------------------------------------------\n";
}
//===============================================
void GController::amberState() {
    m_trafficA->amber();
    m_trafficB->red();
    cout << "-------------------------------------------------\n";
}
//===============================================
void GController::redRedState1() {
    m_trafficA->red();
    m_trafficB->red();
    cout << "-------------------------------------------------\n";
}
//===============================================
void GController::redState() {
    m_trafficA->red();
    m_trafficB->green();
    cout << "-------------------------------------------------\n";
}
//===============================================
void GController::redAmberState() {
    m_trafficA->red();
    m_trafficB->amber();
    cout << "-------------------------------------------------\n";
}
//===============================================
void GController::redRedState2() {
    m_trafficA->red();
    m_trafficB->red();
    cout << "-------------------------------------------------\n";
}
//===============================================
