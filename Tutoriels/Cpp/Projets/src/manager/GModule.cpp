//===============================================
#include "GModule.h"
#include "GModuleImage.h"
#include "GModuleVideo.h"
//===============================================
int GModule::m_moduleCount = 0;
//===============================================
GModule::GModule(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GModule");
    setAttribute(Qt::WA_StyledBackground, true);
    setCursor(Qt::PointingHandCursor);
    m_moduleCount++;
}
//===============================================
GModule::~GModule() {

}
//===============================================
GModule* GModule::Create(const QString& module, QWidget *parent) {
    if(module == "IMAGE") return new GModuleImage(parent);
    if(module == "VIDEO") return new GModuleVideo(parent);
    return new GModuleImage(parent);
}
//===============================================
