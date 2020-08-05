//===============================================
#include "GWorkspace.h"
#include "GWorkspaceNormal.h"
//===============================================
GWorkspace::GWorkspace(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GWorkspace");
    setAttribute(Qt::WA_StyledBackground, true);
}
//===============================================
GWorkspace::~GWorkspace() {

}
//===============================================
GWorkspace* GWorkspace::Create(const string &key) {
    if(key == "NORMAL") return new GWorkspaceNormal;
    return new GWorkspaceNormal;
}
//===============================================
