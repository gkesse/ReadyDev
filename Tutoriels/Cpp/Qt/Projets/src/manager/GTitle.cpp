//===============================================
#include "GTitle.h"
#include "GTitleNormal.h"
//===============================================
GTitle::GTitle(QWidget *parent) :
    QFrame(parent) {
    setObjectName("GTitle");
    setAttribute(Qt::WA_StyledBackground, true);
}
//===============================================
GTitle::~GTitle() {

}
//===============================================
GTitle* GTitle::Create(const string &key) {
    if(key == "NORMAL") return new GTitleNormal;
    return new GTitleNormal;
}
//===============================================
