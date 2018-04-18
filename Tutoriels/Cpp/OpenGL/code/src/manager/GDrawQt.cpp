//===============================================
#include "GDrawQt.h"
#include "GDrawQtSimple.h"
#include "GDrawQtLayout.h"
#include "GDrawQtBind.h"
#include "GConfig.h"
//===============================================
GDrawQt* GDrawQt::m_instance = 0;
//===============================================
GDrawQt::GDrawQt() {

}
//===============================================
GDrawQt::~GDrawQt() {

}
//===============================================
GDrawQt* GDrawQt::Instance() {
    QString m_type = GConfig::Instance()->getData("DRAW_TYPE");
    if(m_type == "SIMPLE") return GDrawQtSimple::Instance();
    if(m_type == "LAYOUT") return GDrawQtLayout::Instance();
    if(m_type == "BIND") return GDrawQtBind::Instance();
    return 0;
}
//===============================================
