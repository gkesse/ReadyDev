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
};
//===============================================
#endif
//===============================================
