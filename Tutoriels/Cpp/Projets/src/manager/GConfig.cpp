//===============================================
#include "GConfig.h"
#include "GConfigNormal.h"
//===============================================
GConfig::GConfig() {

}
//===============================================
GConfig::~GConfig() {

}
//===============================================
GConfig* GConfig::Instance() {
    string lKey = "NORMAL";
    if(lKey == "NORMAL") return GConfigNormal::Instance();
    return GConfigNormal::Instance();
}
//===============================================
