//================================================
#include "GShader.h"
#include "GShaderBind.h"
#include "GShaderLayout.h"
#include "GConfig.h"
//================================================
GShader* GShader::m_instance = 0;
//================================================
GShader::GShader() {

}
//================================================
GShader::~GShader() {
	
}
//================================================
GShader* GShader::Instance() {
    QString m_method = GConfig::Instance()->getData("SHADER_LOAD_METHOD");
    if(m_method == "BIND") return GShaderBind::Instance();
    if(m_method == "LAYOUT") return GShaderLayout::Instance();
    return 0;
}
//================================================
void GShader::setAttribInfo(GAttribInfo* attribInfo) {
    m_attribInfo = attribInfo;
}
//================================================
