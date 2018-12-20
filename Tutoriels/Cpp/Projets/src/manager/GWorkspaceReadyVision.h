//===============================================
#ifndef _GWorkspaceReadyVision_
#define _GWorkspaceReadyVision_
//===============================================
#include "GWorkspace.h"
//===============================================
class GWorkspaceReadyVision : public GWorkspace {
    Q_OBJECT

public:
    GWorkspaceReadyVision(QWidget *parent = 0);
    ~GWorkspaceReadyVision();

private:
    QStackedWidget* m_stackedWidget;
};
//===============================================
#endif
//===============================================
