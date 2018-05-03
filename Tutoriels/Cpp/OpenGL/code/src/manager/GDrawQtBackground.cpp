//===============================================
#include "GDrawQtBackground.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtBackground* GDrawQtBackground::m_instance = 0;
//===============================================
GDrawQtBackground::GDrawQtBackground() {

}
//===============================================
GDrawQtBackground::~GDrawQtBackground() {

}
//===============================================
GDrawQtBackground* GDrawQtBackground::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtBackground;
    }
    return m_instance;
}
//===============================================
