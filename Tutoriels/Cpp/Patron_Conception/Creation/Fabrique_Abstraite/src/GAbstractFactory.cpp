//===============================================
#include "GAbstractFactory.h"
#include "GWinFactory.h"
#include "GOSXFactory.h"
#include "GConfig.h"
//===============================================
GAbstractFactory* GAbstractFactory::Instance() {
    string m_factory = GConfig::Instance()->getData("Factory");
    if(m_factory == "Win") {return GWinFactory::Instance();}
    else if(m_factory == "OSX") {return GOSXFactory::Instance();}
    return 0;
}
//===============================================
