//===============================================
#include "GDraw.h"
#include "GDrawNoFill.h"
#include "GDrawFill.h"
#include "GConfig.h"
//===============================================
GDraw::GDraw() {

}
//===============================================
GDraw::~GDraw() {
    
}
//===============================================
GDraw* GDraw::Instance() {
    string lDraw = GConfig::Instance()->getData("DRAW");
    if(lDraw == "NO_FILL") return GDrawNoFill::Instance();
    if(lDraw == "FILL") return GDrawFill::Instance();
    return GDrawNoFill::Instance();
} 
//===============================================
