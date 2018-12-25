//===============================================
#include "GAntiAliasing.h"
#include "GAntiAliasingDisable.h"
#include "GAntiAliasingEnable.h"
#include "GConfig.h"
//===============================================
GAntiAliasing::GAntiAliasing() {

}
//===============================================
GAntiAliasing::~GAntiAliasing() {

}
//===============================================
GAntiAliasing* GAntiAliasing::Instance() {
    string lAntiAliasing = GConfig::Instance()->getData("ANTI_ALIASING");
    if(lAntiAliasing == "DISABLE") return GAntiAliasingDisable::Instance();
    if(lAntiAliasing == "ENABLE") return GAntiAliasingEnable::Instance();
    return GAntiAliasingDisable::Instance();
}
//================================================
void GAntiAliasing::enable() {}
//================================================
