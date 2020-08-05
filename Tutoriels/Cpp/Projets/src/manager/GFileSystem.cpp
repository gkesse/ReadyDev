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
void GFileSystem::setNameFilters(const QString& nameFilters) {
    m_nameFilters = nameFilters.split(";");
}
//===============================================
void GFileSystem::read(QList<GFileInfo>& dataList) {
    QDir lRootDir(m_rootPath);
    lRootDir.setFilter(QDir::NoDotAndDotDot | QDir::Files | QDir::AllDirs);
    lRootDir.setSorting(QDir::Name | QDir::DirsFirst);
    lRootDir.setNameFilters(m_nameFilters);
    QFileInfoList lInfoList = lRootDir.entryInfoList();
    GFileInfo lItem;

    lItem.icon = fa::folder;
    lItem.type = "DIR";
    lItem.filename = "..";
    dataList.append(lItem);

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
}
//===============================================
bool GFileSystem::exists(const QString& path) {
    QString lPath = QFileInfo(m_rootPath + "/" + path).absoluteFilePath();
    bool lExists = QFileInfo(lPath).exists();
    return lExists;
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
void GFileSystem::getDrive() {
    QFileInfoList lInfoList = QDir::drives();

    for(int i = 0; i < lInfoList.size(); i++) {
        QFileInfo lInfo = lInfoList.at(i);
        QString lDrive = lInfo.absoluteFilePath();
        m_driveMap.append(lDrive);
    }
}
//===============================================
void GFileSystem::getDrive(QList<GFileInfo>& dataList) {
    for(int i = 0; i < m_driveMap.size(); i++) {
        QString lDrive = m_driveMap.at(i);

        GFileInfo lItem;
        lItem.icon = fa::hddo;
        lItem.type = "DRIVE";
        lItem.filename = lDrive;
        dataList.append(lItem);
    }
}
//===============================================
void GFileSystem::getAddress(QStringList& dataList) {
    dataList << "_ROOT_";
    dataList << m_rootPath.split("/");
    dataList.removeAll(QString(""));
}
//===============================================
void GFileSystem::setFilePath(const QString& filePath) {
    QString lFilePath = QFileInfo(m_rootPath + "/" + filePath).absoluteFilePath();
    m_filePath = lFilePath;
}
//===============================================
QString GFileSystem::getFilePath() const {
    return m_filePath;
}
//===============================================
