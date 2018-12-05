//===============================================
#include "GWorkspaceOpenFileDialog.h"
#include "ui_GWorkspaceOpenFileDialog.h"
#include "GPicto.h"
#include "GFileSystem.h"
#include "GPrint.h"
//===============================================
struct sGFileInfo {
    int icon;
    QString type;
    QString filename;
};
//===============================================
GWorkspaceOpenFileDialog::GWorkspaceOpenFileDialog(QWidget *parent) :
    GWorkspace(parent), ui(new Ui::GWorkspaceOpenFileDialog) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    m_dataModel = new QStandardItemModel(this);

    QList<GFileInfo> lDataList;
    GFileSystem::Instance()->open(lDataList);

    for(int i = 0; i < lDataList.size(); i++) {
        GFileInfo lData = lDataList.at(i);
        QStandardItem* lItem = new QStandardItem;
        lItem->setText(lData.filename);
        lItem->setIcon(GPicto::Instance()->getPicto(lData.icon));
        m_dataModel->appendRow(lItem);
    }

    ui->m_listView->setModel(m_dataModel);

    connect(ui->m_listView, SIGNAL(doubleClicked(QModelIndex)), this, SLOT(slotDoubleClicked(QModelIndex)));

    ui->m_mainLayout->setContentsMargins(10, 0, 10, 0);
}
//===============================================
GWorkspaceOpenFileDialog::~GWorkspaceOpenFileDialog() {

}
//===============================================
void GWorkspaceOpenFileDialog::slotDoubleClicked(const QModelIndex &index) {
    QString lPath = index.data(Qt::DisplayRole).value<QString>();
    if(GFileSystem::Instance()->isDir(lPath) == false) return;
    GFileSystem::Instance()->moveRootPath(lPath);

    QList<GFileInfo> lDataList;
    GFileSystem::Instance()->open(lDataList);

    m_dataModel->removeRows(0, m_dataModel->rowCount());

    for(int i = 0; i < lDataList.size(); i++) {
        GFileInfo lData = lDataList.at(i);
        QStandardItem* lItem = new QStandardItem;
        lItem->setText(lData.filename);
        lItem->setIcon(GPicto::Instance()->getPicto(lData.icon));
        m_dataModel->appendRow(lItem);
    }
}
//===============================================
