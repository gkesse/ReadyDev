//===============================================
#include "GProcessWindowHint.h"
#include "GWindowA.h"
#include "GStyle.h"
//===============================================
GProcessWindowHint* GProcessWindowHint::m_instance = 0;
//===============================================
GProcessWindowHint::GProcessWindowHint() {

}
//===============================================
GProcessWindowHint::~GProcessWindowHint() {

}
//===============================================
GProcessWindowHint* GProcessWindowHint::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessWindowHint;
    }
    return m_instance;
}
//===============================================
void GProcessWindowHint::run() {
    GStyle::Instance()->load("res/css/style.css");
    GWindowA* lWindow = GWindowA::Create();
    lWindow->show();
}
//===============================================
