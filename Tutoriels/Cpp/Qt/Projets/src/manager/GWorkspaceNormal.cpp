//===============================================
#include "GWorkspaceNormal.h"
//===============================================
GWorkspaceNormal::GWorkspaceNormal(QWidget *parent) :
    GWorkspace(parent) {
    setObjectName("GWorkspaceNormal");

    QStackedWidget* lWorkspace = new QStackedWidget;

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(lWorkspace);
    lMainLayout->setMargin(0);

    setLayout(lMainLayout);
}
//===============================================
GWorkspaceNormal::~GWorkspaceNormal() {

}
//===============================================
