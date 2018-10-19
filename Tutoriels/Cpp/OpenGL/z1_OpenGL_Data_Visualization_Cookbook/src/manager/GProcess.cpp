//===============================================
#include "GProcess.h"
#include "GProcessGlfwApplication.h"
#include "GProcessDrawingPoints.h"
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
    string lProcess = GConfig::Instance()->getData("PROCESS");
    if(lProcess == "GLFW_APPLICATION") return GProcessGlfwApplication::Instance();
    if(lProcess == "DRAWING_POINTS") return GProcessDrawingPoints::Instance();
    return GProcessGlfwApplication::Instance();
}
//===============================================
