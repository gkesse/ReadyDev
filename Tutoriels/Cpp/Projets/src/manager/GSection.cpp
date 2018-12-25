//===============================================
#include "GSection.h"
#include "GSectionReadyVision.h"
#include "GConfig.h"
//===============================================
GSection::GSection(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GSection");
    setAttribute(Qt::WA_StyledBackground, true);
}
//===============================================
GSection::~GSection() {

}
//===============================================
GSection* GSection::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "READY_VISION") return new GSectionReadyVision(parent);
    return new GSectionReadyVision(parent);
}
//===============================================
GSection* GSection::Create(const QString &key, QWidget* parent) {
    if(key == "READY_VISION") return new GSectionReadyVision(parent);
    return new GSectionReadyVision(parent);
}
//===============================================
