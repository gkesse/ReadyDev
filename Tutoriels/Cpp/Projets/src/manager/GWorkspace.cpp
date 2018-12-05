//===============================================
#include "GWorkspace.h"
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
    if(lKey == "OPEN_FILE_DIALOG") return new GWorkspaceOpenFileDialog(parent);
    return new GWorkspaceOpenFileDialog(parent);
}
//===============================================
GWorkspace* GWorkspace::Create(const QString &key, QWidget* parent) {
    if(key == "OPEN_FILE_DIALOG") return new GWorkspaceOpenFileDialog(parent);
    return new GWorkspaceOpenFileDialog(parent);
}
//===============================================
