//================================================
#include "GDraw.h"
#include "GDrawRgb.h"
#include "GDrawGray.h"
#include "GConfig.h"
//================================================
GDraw* GDraw::m_instance = 0;
//================================================
GDraw::GDraw() {

}
//================================================
GDraw::~GDraw() {
	
}
//================================================
GDraw* GDraw::Instance() {
    QString lImageType = GConfig::Instance()->getData("IMAGE_TYPE");
    if(lImageType == "RGB") return GDrawRgb::Instance();
    if(lImageType == "GRAY") return GDrawGray::Instance();
    return GDrawRgb::Instance();
}
//================================================
