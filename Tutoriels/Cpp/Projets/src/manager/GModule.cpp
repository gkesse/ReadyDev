//===============================================
#include "GModule.h"
#include "GModuleImage.h"
#include "GModuleVideo.h"
#include "GConfig.h"
//===============================================
int GModule::m_moduleCount = 0;
//===============================================
GModule::GModule(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GModule");
    setAttribute(Qt::WA_StyledBackground, true);

    setCursor(Qt::PointingHandCursor);
    m_moduleId = m_moduleCount;
    m_moduleCount++;
}
//===============================================
GModule::~GModule() {

}
//===============================================
GModule* GModule::Create(QWidget *parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "IMAGE") return new GModuleImage(parent);
    if(lKey == "VIDEO") return new GModuleVideo(parent);
    return new GModuleImage(parent);
}
//===============================================
GModule* GModule::Create(const QString& key, QWidget *parent) {
    if(key == "IMAGE") return new GModuleImage(parent);
    if(key == "VIDEO") return new GModuleVideo(parent);
    return new GModuleImage(parent);
}
//===============================================
QString GModule::getModuleName() const {
    return m_moduleName;
}
//===============================================
