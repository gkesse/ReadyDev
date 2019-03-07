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
    string lKey = GConfig::Instance()->getData("IMAGE_TYPE");
    if(lKey == "RGB") return GDrawRgb::Instance();
    if(lKey == "GRAY") return GDrawGray::Instance();
    return GDrawRgb::Instance();
}
//================================================
