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
    void open(QList<GFileInfo> &dataList);
    void setRootPath(const QString& path);
    void moveRootPath(const QString& path);
    bool isDir(const QString& path);
    bool isDrive();
    bool getDrive();

private:
    static GFileSystem* m_instance;
    QString m_rootPath;
    QStringList m_driveMap;
};
//===============================================
#endif
//===============================================
