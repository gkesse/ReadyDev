//===============================================
#include "GBuilder.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("Pizza", "Royal");
    GBuilder::Instance()->build();
    GBuilder::Instance()->getPizza()->print();

    GConfig::Instance()->setData("Pizza", "Hawaii");
    GBuilder::Instance()->build();
    GBuilder::Instance()->getPizza()->print();
    return 0;
}
//===============================================
