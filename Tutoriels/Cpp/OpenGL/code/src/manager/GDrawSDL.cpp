//===============================================
#include "GDrawSDL.h"
#include "GDrawSDLBackground.h"
#include "GDrawSDLSimple.h"
#include "GDrawSDLColor.h"
#include "GDrawSDLMatrix.h"
#include "GDrawSDLMatrixSave.h"
#include "GDrawSDLRotate.h"
#include "GDrawSDLTranslate.h"
#include "GDrawSDLScale.h"
#include "GDrawSDLComposite.h"
#include "GDrawSDLCube.h"
#include "GDrawSDLCubeObj.h"
#include "GDrawSDLCubeVbo.h"
#include "GDrawSDLCubeVao.h"
#include "GDrawSDLCubeAnimate.h"
#include "GDrawSDLEvent.h"
#include "GDrawSDLTexture.h"
#include "GDrawSDLTextureRepeat.h"
#include "GDrawSDLTextureObj.h"
#include "GDrawSDLTextureVbo.h"
#include "GDrawSDLCamera.h"
#include "GDrawSDLRelic.h"
#include "GConfig.h"
//===============================================
GDrawSDL* GDrawSDL::m_instance = 0;
//===============================================
GDrawSDL::GDrawSDL() {

}
//===============================================
GDrawSDL::~GDrawSDL() {

}
//===============================================
GDrawSDL* GDrawSDL::Instance() {
    QString lType = GConfig::Instance()->getData("DRAW_TYPE");
    if(lType == "BACKGROUND") return GDrawSDLBackground::Instance();
    if(lType == "SIMPLE") return GDrawSDLSimple::Instance();
    if(lType == "COLOR") return GDrawSDLColor::Instance();
    if(lType == "MATRIX") return GDrawSDLMatrix::Instance();
    if(lType == "MATRIX_SAVE") return GDrawSDLMatrixSave::Instance();
    if(lType == "ROTATE") return GDrawSDLRotate::Instance();
    if(lType == "TRANSLATE") return GDrawSDLTranslate::Instance();
    if(lType == "SCALE") return GDrawSDLScale::Instance();
    if(lType == "COMPOSITE") return GDrawSDLComposite::Instance();
    if(lType == "CUBE") return GDrawSDLCube::Instance();
    if(lType == "CUBE_OBJ") return GDrawSDLCubeObj::Instance();
    if(lType == "CUBE_VBO") return GDrawSDLCubeVbo::Instance();
    if(lType == "CUBE_VAO") return GDrawSDLCubeVao::Instance();
    if(lType == "CUBE_ANIMATE") return GDrawSDLCubeAnimate::Instance();
    if(lType == "EVENT") return GDrawSDLEvent::Instance();
    if(lType == "TEXTURE") return GDrawSDLTexture::Instance();
    if(lType == "TEXTURE_REPEAT") return GDrawSDLTextureRepeat::Instance();
    if(lType == "TEXTURE_OBJ") return GDrawSDLTextureObj::Instance();
    if(lType == "TEXTURE_VBO") return GDrawSDLTextureVbo::Instance();
    if(lType == "CAMERA") return GDrawSDLCamera::Instance();
    if(lType == "RELIC") return GDrawSDLRelic::Instance();
    return GDrawSDLBackground::Instance();
}
//===============================================
