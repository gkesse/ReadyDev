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

public slots:
    void slotWorkspaceCreate(const QString& module, const QString& name);
    void slotWorkspaceShowImage(const int& id, const cv::Mat& img);

private:
    QStackedWidget* m_stackedWidget;
};
//===============================================
#endif
//===============================================