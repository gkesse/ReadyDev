//===============================================
#ifndef _GFileSystem_
#define _GFileSystem_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct sGFileInfo GFileInfo;
//===============================================
class GFileSystem {
private:
    GFileSystem();

public:
    ~GFileSystem();
    static GFileSystem* Instance();
    void setNameFilters(const QString &nameFilters);
    void read(QList<GFileInfo> &dataList);
    void setRootPath(const QString& path);
    void moveRootPath(const QString& path);
    bool exists(const QString& path);
    bool isDir(const QString& path);
    bool isDrive();
    void getDrive();
    void getDrive(QList<GFileInfo>& dataList);
    void getAddress(QStringList& dataList);
    void setFilePath(const QString& filePath);
    QString getFilePath() const;

private:
    static GFileSystem* m_instance;
    QString m_rootPath;
    QString m_filePath;
    QStringList m_driveMap;
    QStringList m_nameFilters;
};
//===============================================
#endif
//===============================================
