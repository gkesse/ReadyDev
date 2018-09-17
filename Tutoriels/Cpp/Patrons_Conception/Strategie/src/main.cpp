//===============================================
#include "GDatabase.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Patron Strategie\n\n";
    GConfig::Instance()->setData("DATABASE", "SQLITE");
    GDatabase::Instance()->open();
    GConfig::Instance()->setData("DATABASE", "MYSQL");
    GDatabase::Instance()->open();
    return 0;
}
//===============================================
