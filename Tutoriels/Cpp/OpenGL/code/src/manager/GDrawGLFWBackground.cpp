//===============================================
#include "GDrawGLFWBackground.h"
//===============================================
GDrawGLFWBackground* GDrawGLFWBackground::m_instance = 0;
//===============================================
GDrawGLFWBackground::GDrawGLFWBackground() {

}
//===============================================
GDrawGLFWBackground::~GDrawGLFWBackground() {

}
//===============================================
GDrawGLFWBackground* GDrawGLFWBackground::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawGLFWBackground;
    }
    return m_instance;
}
//===============================================
