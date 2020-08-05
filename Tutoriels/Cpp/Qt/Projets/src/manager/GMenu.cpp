//===============================================
#include "GMenu.h"
#include "GMenuNormal.h"
//===============================================
GMenu::GMenu(QWidget *parent) :
    QFrame(parent) {
    setObjectName("GMenu");
    setAttribute(Qt::WA_StyledBackground, true);
}
//===============================================
GMenu::~GMenu() {

}
//===============================================
GMenu* GMenu::Create(const string &key) {
    if(key == "NORMAL") return new GMenuNormal;
    return new GMenuNormal;
}
//===============================================
