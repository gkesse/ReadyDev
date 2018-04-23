//================================================
#include "GWindowNormal.h"
#include "GDraw.h"
#include "GConfig.h"
//================================================
GWindowNormal* GWindowNormal::m_instance = 0;
//================================================
GWindowNormal::GWindowNormal() {

}
//================================================
GWindowNormal::~GWindowNormal() {

}
//================================================
GWindowNormal* GWindowNormal::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowNormal;
    }
    return m_instance;
}
//================================================
