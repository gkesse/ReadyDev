//===============================================
#include "GFileSystem.h"
#include "GPicto.h"
#include "GPrint.h"
//===============================================
GFileSystem* GFileSystem::m_instance = 0;
//===============================================
struct sGFileInfo {
    int icon;
    QString type;
    QString filename;
};
//===============================================
GFileSystem::GFileSystem() {
    m_rootPath = QDir::homePath();
    getDrive();
}
//===============================================
GFileSystem::~GFileSystem() {

}
//===============================================
GFileSystem* GFileSystem::Instance() {
    if(m_instance == 0) {
        m_instance = new GFileSystem;
    }
    return m_instance;
}
//===============================================
void GFileSystem::open(QList<GFileInfo>& dataList) {
    QDir lRootDir(m_rootPath);
    lRootDir.setFilter(QDir::NoDotAndDotDot | QDir::Files | QDir::Dirs);
    lRootDir.setSorting(QDir::Name | QDir::DirsFirst);
    QFileInfoList lInfoList = lRootDir.entryInfoList();
    GFileInfo lItem;

    if(isDrive() == false) {
        lItem.icon = fa::folder;
        lItem.type = "DIR";
        lItem.filename = "..";
        dataList.append(lItem);
    }

    for(int i = 0; i < lInfoList.size(); i++) {
        QFileInfo lInfo = lInfoList.at(i);
        QString lFilename = lInfo.fileName();
        if(lFilename.at(0) == '.') continue;
        QString lType = "DIR";
        int lIcon = fa::folder;
        if(lInfo.isDir() == false) {
            lType = "FILE";
            lIcon = fa::fileo;
        }

        lItem.icon = lIcon;
        lItem.type = lType;
        lItem.filename = lFilename;
        dataList.append(lItem);
    }
}
//===============================================
void GFileSystem::setRootPath(const QString& path) {
    m_rootPath = path;
}
//===============================================
void GFileSystem::moveRootPath(const QString& path) {
    QString lPath = QFileInfo(m_rootPath + "/" + path).absoluteFilePath();
    m_rootPath = lPath;
    GPrint::Instance()->print(m_rootPath.toStdString());
}
//===============================================
bool GFileSystem::isDir(const QString& path) {
    QString lPath = QFileInfo(m_rootPath + "/" + path).absoluteFilePath();
    bool lIsDir = QFileInfo(lPath).isDir();
    return lIsDir;
}
//===============================================
bool GFileSystem::isDrive() {
    return m_driveMap.contains(m_rootPath);
}
//===============================================
bool GFileSystem::getDrive() {
    QFileInfoList lInfoList = QDir::drives();

    for(int i = 0; i < lInfoList.size(); i++) {
        QFileInfo lInfo = lInfoList.at(i);
        QString lDrive = lInfo.absoluteFilePath();
        m_driveMap.append(lDrive);
        GPrint::Instance()->print(lDrive.toStdString());
    }
}
//===============================================
