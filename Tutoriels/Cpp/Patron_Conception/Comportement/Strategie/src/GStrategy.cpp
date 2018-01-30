//===============================================
#include "GStrategy.h"
#include "GAlgorithmA.h"
#include "GAlgorithmB.h"
#include "GConfig.h"
//===============================================
GStrategy* GStrategy::Instance() {
    string m_strategy = GConfig::Instance()->getData("Strategy");
    if(m_strategy == "AlgorithmA") {return GAlgorithmA::Instance();}
    else if(m_strategy == "AlgorithmB") {return GAlgorithmB::Instance();}
    return 0;
}
//===============================================
