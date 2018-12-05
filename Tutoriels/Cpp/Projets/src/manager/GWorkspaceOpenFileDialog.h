//===============================================
#ifndef _GWorkspaceOpenFile_
#define _GWorkspaceOpenFile_
//===============================================
#include "GWorkspace.h"
//===============================================
namespace Ui {
class GWorkspaceOpenFileDialog;
}
//===============================================
class GWorkspaceOpenFileDialog : public GWorkspace {
    Q_OBJECT

public:
    GWorkspaceOpenFileDialog(QWidget *parent = 0);
    ~GWorkspaceOpenFileDialog();

public slots:
    void slotDoubleClicked(const QModelIndex &index);

private:
    Ui::GWorkspaceOpenFileDialog* ui;
    QStandardItemModel* m_dataModel;
};
//===============================================
#endif
//===============================================
