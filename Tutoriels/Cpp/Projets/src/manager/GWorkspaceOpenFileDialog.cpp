//===============================================
#include "GWorkspaceOpenFileDialog.h"
#include "ui_GWorkspaceOpenFileDialog.h"
#include "GPicto.h"
#include "GFileSystem.h"
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
    GFileSystem::Instance()->read(lDataList);
    updateDataModel(lDataList);

    ui->m_listView->setModel(m_dataModel);

    connect(ui->m_listView, SIGNAL(clicked(QModelIndex)), this, SLOT(slotItemClicked(QModelIndex)));
    connect(this, SIGNAL(emitHomeClicked()), this, SLOT(slotHomeClicked()));
    connect(this, SIGNAL(emitDrivesClicked()), this, SLOT(slotDrivesClicked()));
    connect(this, SIGNAL(emitAddressClicked()), this, SLOT(slotAddressClicked()));

    ui->m_mainLayout->setContentsMargins(0, 0, 0, 0);
    ui->m_mainLayout->setSpacing(0);
}
//===============================================
GWorkspaceOpenFileDialog::~GWorkspaceOpenFileDialog() {

}
//===============================================
void GWorkspaceOpenFileDialog::updateDataModel(const QList<GFileInfo> &dataList) {
    m_dataModel->removeRows(0, m_dataModel->rowCount());

    for(int i = 0; i < dataList.size(); i++) {
        GFileInfo lData = dataList.at(i);
        QStandardItem* lItem = new QStandardItem;
        lItem->setText(lData.filename);
        lItem->setIcon(GPicto::Instance()->getPicto(lData.icon));
        m_dataModel->appendRow(lItem);
    }
    emit emitOkButtonEnable(false);
}
//===============================================
void GWorkspaceOpenFileDialog::slotItemClicked(const QModelIndex &index) {
    QString lPath = index.data(Qt::DisplayRole).value<QString>();
    if(GFileSystem::Instance()->exists(lPath) == true) {
        if(GFileSystem::Instance()->isDir(lPath) == false) {
            GFileSystem::Instance()->setFilePath(lPath );
            emit emitOkButtonEnable(true);
            return;
        }
        if(GFileSystem::Instance()->isDrive() == true) {
            if(lPath == "..") {
                emit emitDrivesClicked();
                return;
            }
        }
        GFileSystem::Instance()->moveRootPath(lPath);
    }
    else {
        GFileSystem::Instance()->setRootPath(lPath);
    }
    QList<GFileInfo> lDataList;
    GFileSystem::Instance()->read(lDataList);
    updateDataModel(lDataList);
    emit emitUpdateAddress();
}
//===============================================
void GWorkspaceOpenFileDialog::slotHomeClicked() {
    GFileSystem::Instance()->setRootPath(QDir::homePath());
    QList<GFileInfo> lDataList;
    GFileSystem::Instance()->read(lDataList);
    updateDataModel(lDataList);
    GFileSystem::Instance()->setRootPath(QDir::homePath());
    emit emitUpdateAddress();
}
//===============================================
void GWorkspaceOpenFileDialog::slotDrivesClicked() {
    QList<GFileInfo> lDataList;
    GFileSystem::Instance()->getDrive(lDataList);
    updateDataModel(lDataList);
    GFileSystem::Instance()->setRootPath("");
    emit emitUpdateAddress();
}
//===============================================
void GWorkspaceOpenFileDialog::slotAddressClicked() {
    QList<GFileInfo> lDataList;
    GFileSystem::Instance()->read(lDataList);
    updateDataModel(lDataList);
}
//===============================================
