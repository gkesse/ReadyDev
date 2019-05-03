//===============================================
#include "GProcessPushButton.h"
#include "GQt.h"
#include "GStyle.h"
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
void GProcessPushButton::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");

    GQt::Instance()->createPushButton("ADD");
    GQt::Instance()->getPushButton("ADD")->setText("Ajouter");

    GQt::Instance()->createHBoxLayout("MAIN");
    GQt::Instance()->getHBoxLayout("MAIN")->addWidget(GQt::Instance()->getPushButton("ADD"));

    GQt::Instance()->createWidget("WINDOW");
    GQt::Instance()->getWidget("WINDOW")->setObjectName("GWidget");
    GQt::Instance()->getWidget("WINDOW")->setLayout(GQt::Instance()->getHBoxLayout("MAIN"));
    GQt::Instance()->getWidget("WINDOW")->show();

    lApp.exec();
}
//===============================================
