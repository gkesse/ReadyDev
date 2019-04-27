//===============================================
#include "GDatabase.h"
#include "GDatabaseSqlite.h"
#include "GPrint.h"
#include "GConfig.h"
//===============================================
GDatabase::GDatabase() {

}
//===============================================
GDatabase::~GDatabase() {

}
//===============================================
GDatabase* GDatabase::Instance() {
    string lKey = GConfig::Instance()->getData("DATABASE");
    if(lKey == "SQLITE") return GDatabaseSqlite::Instance();
    return GDatabaseSqlite::Instance();
}
//===============================================
void GDatabase::showDrivers() {
    QStringList lDriverMap = QSqlDatabase::drivers();
    GPrint::Instance()->print(lDriverMap, "DRIVERS");
}
//===============================================
void GDatabase::showTables(const QString& connectionName) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    QStringList lTableMap = lDatabase.tables();
    GPrint::Instance()->print(lTableMap, "TABLES");
}
//===============================================
void GDatabase::addDatabase(const QString& connectionName, const QString& driverName) {
    QSqlDatabase::addDatabase(driverName, connectionName);
}
//===============================================
void GDatabase::setDatabaseName(const QString &connectionName, const QString &databasePath) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    lDatabase.setDatabaseName(databasePath);
}
//===============================================
void GDatabase::openDatabase(const QString& connectionName) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    lDatabase.open();
}
//===============================================
void GDatabase::closeDatabase(const QString& connectionName) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    lDatabase.close();
}
//===============================================
void GDatabase::createQuery(const QString& connectionName, const QString& queryName) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    QSqlQuery* lSqlQuery = new QSqlQuery(lDatabase);
    m_queryMap[queryName] = lSqlQuery;
}
//===============================================
void GDatabase::releaseQuery(const QString& queryName) {
    QSqlQuery* lSqlQuery = m_queryMap[queryName];
    delete lSqlQuery;
    m_queryMap.remove(queryName);
}
//===============================================
void GDatabase::exec(const QString& queryName, const QString& query) {
    QSqlQuery* lSqlQuery = m_queryMap[queryName];
    bool lOk = lSqlQuery->exec(query);
    if(lOk == false) cout << "ERROR: GDatabase::exec()...\n";
}
//===============================================
bool GDatabase::empty(const QString& queryName, const QString& tableName) {
    int lSize = countTableRows(queryName, tableName);
    if(lSize <= 0) return true;
    return false;
}
//===============================================
void GDatabase::prepare(const QString& queryName, const QString& query) {
    QSqlQuery* lSqlQuery = m_queryMap[queryName];
    bool lOk = lSqlQuery->prepare(query);
    if(lOk == false) cout << "ERROR: GDatabase::prepare()...\n";
}
//===============================================
void GDatabase::prepareBind(const QString& queryName, const QVariant& data) {
    QSqlQuery* lSqlQuery = m_queryMap[queryName];
    lSqlQuery->addBindValue(data);
}
//===============================================
void GDatabase::prepareExec(const QString& queryName) {
    QSqlQuery* lSqlQuery = m_queryMap[queryName];
    bool lOk = lSqlQuery->exec();
    if(lOk == false) cout << "ERROR: GDatabase::prepareExec()...\n";
}
//===============================================
QVariant GDatabase::prepareId(const QString& queryName) {
    QSqlQuery* lSqlQuery = m_queryMap[queryName];
    return lSqlQuery->lastInsertId();
}
//===============================================
QVariant GDatabase::prepareData(const QString& queryName, const QVariant& data) {
    prepareBind(queryName, data);
    prepareExec(queryName);
    return prepareId(queryName);
}
//===============================================
QVariant GDatabase::prepareData(const QString& queryName, const QVariant& data, const QVariant& data2) {
    prepareBind(queryName, data);
    prepareBind(queryName, data2);
    prepareExec(queryName);
    return prepareId(queryName);
}
//===============================================
QVariant GDatabase::prepareData(const QString& queryName, const QVariant& data, const QVariant& data2, const QVariant& data3, const QVariant& data4, const QVariant& data5) {
    prepareBind(queryName, data);
    prepareBind(queryName, data2);
    prepareBind(queryName, data3);
    prepareBind(queryName, data4);
    prepareBind(queryName, data5);
    prepareExec(queryName);
    return prepareId(queryName);
}
//===============================================
void GDatabase::createTable(const QString& queryName, const QString& tableName, const QString& params) {
    QString lQuery = QString("create table if not exists %1(%2)").arg(tableName).arg(params);
    QSqlQuery* lSqlQuery = m_queryMap[queryName];
    bool lOk = lSqlQuery->exec(lQuery);
    if(lOk == false) cout << "ERROR: GDatabase::createTable()...\n";
}
//===============================================
int GDatabase::countTableRows(const QString& queryName, const QString& tableName) {
    QSqlQuery* lSqlQuery = m_queryMap[queryName];
    QString lQuery = QString("select * from %1").arg(tableName);
    bool lOk = lSqlQuery->exec(lQuery);
    if(lOk == false) cout << "ERROR: GDatabase::countTableRow()...\n";
    int lRows = 0;
    while(lSqlQuery->next()) {
        lRows++;
    }
    return lRows;
}
//===============================================
void GDatabase::showTableData(const QString& queryName, const QString& tableName) {
    QSqlQuery* lSqlQuery = m_queryMap[queryName];
    QString lQuery = QString("select * from %1").arg(tableName);
    lSqlQuery->exec(lQuery);
    QVector<QStringList> lst;
    while (lSqlQuery->next())
    {
        QSqlRecord record = lSqlQuery->record();
        QStringList tmp;
        for(int i=0; i < record.count(); i++)
        {
            tmp << record.value(i).toString();
        }
        lst.append(tmp);
    }
    foreach (const QStringList &var, lst) {
        qDebug() << var;
    }
}
//===============================================

