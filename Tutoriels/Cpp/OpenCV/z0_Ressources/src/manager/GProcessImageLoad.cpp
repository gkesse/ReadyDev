//===============================================
#include "GProcessImageLoad.h"
#include "GOpenCV.h"
//===============================================
GProcessImageLoad* GProcessImageLoad::m_instance = 0;
//===============================================
GProcessImageLoad::GProcessImageLoad() {

}
//===============================================
GProcessImageLoad::~GProcessImageLoad() {

}
//===============================================
GProcessImageLoad* GProcessImageLoad::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImageLoad;
    }
    return m_instance;
}
//===============================================
void GProcessImageLoad::run() {
    GOpenCV::Instance()->loadImage("res/img/fruits.jpg");
}
//===============================================
