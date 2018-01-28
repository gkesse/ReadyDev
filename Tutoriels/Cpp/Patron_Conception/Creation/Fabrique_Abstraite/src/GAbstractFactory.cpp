//===============================================
#include "GAbstractFactory.h"
#include "GWinFactory.h"
#include "GOSXFactory.h"
//===============================================
GAbstractFactory* GAbstractFactory::Create(const string& factory) {
    if(factory == "Win") {return new GWinFactory;}
    else if(factory == "OSX") {return new GOSXFactory;}
    return 0;
}
//===============================================
