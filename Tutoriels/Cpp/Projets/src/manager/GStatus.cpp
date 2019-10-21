//===============================================
#include "GStatus.h"
#include "GStatusReadyVision.h"
#include "GConfig.h"
//===============================================
GStatus::GStatus(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GStatus");
}
//===============================================
GStatus::~GStatus() {

}
//===============================================
GStatus* GStatus::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "READY_VISION") return new GStatusReadyVision(parent);
    return new GStatusReadyVision(parent);
}
//===============================================
GStatus* GStatus::Create(const QString &key, QWidget* parent) {
    if(key == "READY_VISION") return new GStatusReadyVision(parent);
    return new GStatusReadyVision(parent);
}
//===============================================
