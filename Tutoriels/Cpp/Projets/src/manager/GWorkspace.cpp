//===============================================
#include "GWorkspace.h"
#include "GWorkspaceReadyVision.h"
#include "GWorkspaceOpenFileDialog.h"
#include "GConfig.h"
//===============================================
GWorkspace::GWorkspace(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GWorkspace");
}
//===============================================
GWorkspace::~GWorkspace() {

}
//===============================================
GWorkspace* GWorkspace::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "READY_VISION") return new GWorkspaceReadyVision(parent);
    if(lKey == "OPEN_FILE_DIALOG") return new GWorkspaceOpenFileDialog(parent);
    return new GWorkspaceReadyVision(parent);
}
//===============================================
GWorkspace* GWorkspace::Create(const QString &key, QWidget* parent) {
    if(key == "READY_VISION") return new GWorkspaceReadyVision(parent);
    if(key == "OPEN_FILE_DIALOG") return new GWorkspaceOpenFileDialog(parent);
    return new GWorkspaceReadyVision(parent);
}
//===============================================
