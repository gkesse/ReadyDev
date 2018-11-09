//===============================================
#include "GTrackbarNoSet.h"
#include "GOpenCV.h"
//===============================================
GTrackbarNoSet* GTrackbarNoSet::m_instance = 0;
//===============================================
GTrackbarNoSet::GTrackbarNoSet() {

}
//===============================================
GTrackbarNoSet::~GTrackbarNoSet() {

}
//===============================================
GTrackbarNoSet* GTrackbarNoSet::Instance() {
    if(m_instance == 0) {
        m_instance = new GTrackbarNoSet;
    }
    return m_instance;
}
//===============================================
