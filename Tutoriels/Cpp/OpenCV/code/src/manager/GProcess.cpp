//===============================================
#include "GProcess.h"
#include "GProcessImageLoad.h"
#include "GProcessVideoRead.h"
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
    QString lName = GConfig::Instance()->getData("PROCESS_NAME");
    if(lName == "IMAGE_LOAD") return GProcessImageLoad::Instance();
    if(lName == "VIDEO_READ") return GProcessVideoRead::Instance();
    return GProcessImageLoad::Instance();
}
//===============================================
