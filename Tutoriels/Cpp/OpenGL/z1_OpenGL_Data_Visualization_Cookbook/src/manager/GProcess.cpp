//===============================================
#include "GProcess.h"
#include "GProcessPoint.h"
#include "GProcessLine.h"
#include "GProcessTriangle.h"
#include "GConfig.h"
//===============================================
GProcess* GProcess::m_instance = 0;
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "POINT") return GProcessPoint::Instance();
    if(lKey == "LINE") return GProcessLine::Instance();
    if(lKey == "TRIANGLE") return GProcessTriangle::Instance();
    return GProcessPoint::Instance();
}
//===============================================
