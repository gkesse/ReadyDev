//===============================================
#include "GWindowA.h"
#include "GWindowFull.h"
#include "GWindowImage.h"
#include "GConfig.h"
//===============================================
GWindowA::GWindowA(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GWindowA");
}
//===============================================
GWindowA::~GWindowA() {

}
//===============================================
GWindowA* GWindowA::Create(QWidget *parent) {
    string lWindow = GConfig::Instance()->getData("WINDOW");
    if(lWindow == "FULL_SCREEN") return new GWindowFull(parent);
    if(lWindow == "IMAGE") return new GWindowImage(parent);
    return new GWindowFull(parent);
}
//===============================================
GWindowA* GWindowA::Create(const QString& window, QWidget *parent) {
    if(window == "FULL_SCREEN") return new GWindowFull(parent);
    return new GWindowFull(parent);
}
//===============================================
