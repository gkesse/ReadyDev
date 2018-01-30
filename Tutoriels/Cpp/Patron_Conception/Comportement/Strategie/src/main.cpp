//===============================================
#include "GStrategy.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("Strategy", "AlgorithmA");
    GStrategy::Instance()->execute();

    GConfig::Instance()->setData("Strategy", "AlgorithmB");
    GStrategy::Instance()->execute();
    return 0;
}
//===============================================
