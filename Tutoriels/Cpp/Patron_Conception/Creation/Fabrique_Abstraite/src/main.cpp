//===============================================
#include "GAbstractFactory.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("Factory", "Win");
    GAbstractFactory::Instance()->createButton()->paint();

    GConfig::Instance()->setData("Factory", "OSX");
    GAbstractFactory::Instance()->createButton()->paint();
    return 0;
}
//===============================================
