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
void GDatabase::open(const QString& connectionName) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    lDatabase.open();
}
//===============================================
void GDatabase::close(const QString& connectionName) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    lDatabase.close();
}
//===============================================
void GDatabase::exec(const QString& connectionName, const QString& query) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    QSqlQuery lSqlQuery(lDatabase);
    bool lOk = lSqlQuery.exec(query);
    if(lOk == false) cout << "ERROR: Database::exec()...\n";
}
//===============================================
void GDatabase::prepare(const QString& connectionName, const QString& prepareQueryName, const QString& query) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    QSqlQuery* lSqlQuery = new  QSqlQuery(lDatabase);
    m_prepareQueryMap[prepareQueryName] = lSqlQuery;
    bool lOk = lSqlQuery->prepare(query);
    if(lOk == false) cout << "ERROR: Database::prepare()...\n";
}
//===============================================
void GDatabase::prepareData(const QString& prepareQueryName, const QVariant& data) {
    QSqlQuery* lSqlQuery = m_prepareQueryMap[prepareQueryName];
    lSqlQuery->addBindValue(data);
}
//===============================================
void GDatabase::prepareExec(const QString& prepareQueryName) {
    QSqlQuery* lSqlQuery = m_prepareQueryMap[prepareQueryName];
    lSqlQuery->exec();
}
//===============================================
QVariant GDatabase::prepareId(const QString& prepareQueryName) {
    QSqlQuery* lSqlQuery = m_prepareQueryMap[prepareQueryName];
    return lSqlQuery->lastInsertId();
}
//===============================================
void GDatabase::prepareRelease(const QString& prepareQueryName) {
    QSqlQuery* lSqlQuery = m_prepareQueryMap[prepareQueryName];
    delete lSqlQuery;
    m_prepareQueryMap.remove(prepareQueryName);
}
//===============================================
void GDatabase::createTable(const QString& connectionName, const QString& tableName, const QString& params) {
    QString lQuery = QString("create table if not exists %1(%2)").arg(tableName).arg(params);
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    QSqlQuery lSqlQuery(lDatabase);
    lSqlQuery.exec(lQuery);
}
//===============================================

