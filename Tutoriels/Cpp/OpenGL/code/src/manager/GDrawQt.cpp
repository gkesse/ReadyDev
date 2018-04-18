//===============================================
#include "GDrawQt.h"
#include "GDrawQtSimple.h"
//#include "GDrawQtColor.h"
//#include "GDrawQtColorWr.h"
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
    //if(m_type == "COLOR") return GDrawQtColor::Instance();
    //if(m_type == "COLOR_WR") return GDrawQtColorWr::Instance();
    return 0;
}
//===============================================
