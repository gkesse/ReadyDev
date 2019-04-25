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
    if(lDatabase.isOpen() == false) {
        lDatabase.open();
    }
}
//===============================================
void GDatabase::close(const QString& connectionName) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    if(lDatabase.isOpen() == true) {
        lDatabase.close();
    }
}
//===============================================
void GDatabase::exec(const QString& connectionName, const QString& query) {
    QSqlDatabase lDatabase = QSqlDatabase::database(connectionName);
    QSqlQuery lSqlQuery(lDatabase);
    lSqlQuery.exec(query);
}
//===============================================

