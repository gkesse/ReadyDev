//================================================
#include "GStrategy.h"
#include "GStrategyJava.h"
#include "GStrategyPython.h"
#include "GConfig.h"
//================================================
GStrategy::GStrategy() {

}
//================================================
GStrategy::~GStrategy() {

}
//================================================
GStrategy* GStrategy::Instance() {
    string lKey = GConfig::Instance()->getData("STRATEGY");
    if(lKey == "JAVA") return GStrategyJava::Instance();
    if(lKey == "PYTHON") return GStrategyPython::Instance();
    return GStrategyJava::Instance();
}
//================================================
void GStrategy::setName(const string &name) {
    m_name = name;
}
//================================================
