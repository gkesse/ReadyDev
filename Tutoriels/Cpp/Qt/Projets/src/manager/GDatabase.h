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
    void openDatabase(const QString& connectionName);
    void closeDatabase(const QString& connectionName);
    void createQuery(const QString& connectionName, const QString& queryName);
    void releaseQuery(const QString& queryName);
    void exec(const QString& queryName, const QString &query);
    void prepare(const QString& queryName, const QString& query);
    void prepareBind(const QString& queryName, const QVariant& data);
    void prepareExec(const QString& queryName);
    QVariant prepareId(const QString& queryName);
    bool empty(const QString& queryName, const QString& tableName);
    QVariant prepareData(const QString& queryName, const QVariant& data);
    QVariant prepareData(const QString& queryName, const QVariant& data, const QVariant& data2);
    QVariant prepareData(const QString& queryName, const QVariant& data, const QVariant& data2, const QVariant& data3, const QVariant& data4, const QVariant& data5);
    void createTable(const QString& queryName, const QString& tableName, const QString& params);
    int countTableRows(const QString& queryName, const QString& tableName);
    void showTableData(const QString& queryName, const QString& tableName);

private:
    QMap<QString, QSqlQuery*> m_queryMap;
};
//===============================================
#endif
//===============================================
