//===============================================
#ifndef _GDatabase_
#define _GDatabase_
//================================================
#include "GInclude.h"
//===============================================
class GDatabase {
public:
    GDatabase();
    virtual ~GDatabase();

public:
    static GDatabase* Instance();
    void showDrivers();
    void showTables(const QString& connectionName);
    void addDatabase(const QString &connectionName, const QString &driverName);
    void setDatabaseName(const QString& connectionName, const QString &databasePath);
    void open(const QString& connectionName);
    void close(const QString& connectionName);
    void exec(const QString& connectionName, const QString &query);
    void prepare(const QString& connectionName, const QString &prepareQueryName, const QString& query);
    void prepareData(const QString& prepareQueryName, const QVariant& data);
    void prepareExec(const QString& prepareQueryName);
    QVariant prepareId(const QString& prepareQueryName);
    void prepareRelease(const QString& prepareQueryName);
    void createTable(const QString& connectionName, const QString& tableName, const QString& params);

private:
    QMap<QString, QSqlQuery*> m_prepareQueryMap;
};
//===============================================
#endif
//===============================================
