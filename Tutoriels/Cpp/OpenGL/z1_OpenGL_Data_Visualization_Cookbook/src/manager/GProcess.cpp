//===============================================
#include "GProcess.h"
#include "GProcessPoint.h"
#include "GProcessLine.h"
#include "GProcessTriangle.h"
#include "GProcessGrid.h"
#include "GProcessCallback.h"
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
    if(lKey == "GRID") return GProcessGrid::Instance();
    if(lKey == "CALLBACK") return GProcessCallback::Instance();
    return GProcessPoint::Instance();
}
//===============================================
