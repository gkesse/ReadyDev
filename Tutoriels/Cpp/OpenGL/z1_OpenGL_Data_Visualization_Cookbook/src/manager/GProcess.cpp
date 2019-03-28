//===============================================
#include "GProcess.h"
#include "GProcessPoint.h"
#include "GProcessGlfwApplication.h"
#include "GProcessDrawingPoints.h"
#include "GProcessDrawingLine.h"
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
    if(lKey == "GLFW_APPLICATION") return GProcessGlfwApplication::Instance();
    if(lKey == "DRAWING_POINTS") return GProcessDrawingPoints::Instance();
    if(lKey == "DRAWING_LINE") return GProcessDrawingLine::Instance();
    return GProcessGlfwApplication::Instance();
}
//===============================================
