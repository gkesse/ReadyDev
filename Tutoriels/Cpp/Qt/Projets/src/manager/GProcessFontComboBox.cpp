//===============================================
#include "GProcessSlider.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessSlider* GProcessSlider::m_instance = 0;
//===============================================
GProcessSlider::GProcessSlider() {

}
//===============================================
GProcessSlider::~GProcessSlider() {

}
//===============================================
GProcessSlider* GProcessSlider::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSlider;
    }
    return m_instance;
}
//===============================================
void GProcessSlider::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("TOOLBUTTON");
    lWindow->show();
    lApp.exec();
}
//===============================================
