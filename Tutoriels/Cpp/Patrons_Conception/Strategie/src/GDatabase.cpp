//===============================================
#include "GDatabase.h"
#include "GDatabaseSQLite.h"
#include "GDatabaseMySQL.h"
#include "GConfig.h"
//===============================================
GDatabase::GDatabase() {

}
//===============================================
GDatabase::~GDatabase() {
    
}
//===============================================
GDatabase* GDatabase::Instance() {
    string lDatabase = GConfig::Instance()->getData("DATABASE");
    if(lDatabase == "SQLITE") return GDatabaseSQLite::Instance();
    if(lDatabase == "MYSQL") return GDatabaseMySQL::Instance();
    return GDatabaseSQLite::Instance();
} 
//===============================================
