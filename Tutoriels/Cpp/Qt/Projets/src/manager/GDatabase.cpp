//===============================================
#include "GDatabase.h"
#include "GDatabaseSqlite.h"
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
    cout << "DRIVERS:\n";
    for(int i = 0; i < lDriverMap.size(); i++) {
        QString lDriver = lDriverMap.at(i);
        cout << "\t" << lDriver.toStdString() << "\n";
    }
    cout << "\n";
}
//===============================================

