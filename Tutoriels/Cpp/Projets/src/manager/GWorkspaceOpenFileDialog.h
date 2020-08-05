//===============================================
#ifndef _GWorkspaceOpenFileDialog_
#define _GWorkspaceOpenFileDialog_
//===============================================
#include "GWorkspace.h"
//===============================================
typedef struct sGFileInfo GFileInfo;
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
    void updateDataModel(const QList<GFileInfo>& dataList);

public slots:
    void slotItemClicked(const QModelIndex &index);
    void slotHomeClicked();
    void slotDrivesClicked();
    void slotAddressClicked();

private:
    Ui::GWorkspaceOpenFileDialog* ui;
    QStandardItemModel* m_dataModel;
};
//===============================================
#endif
//===============================================
