//===============================================
#include "GCameraSDL.h"
//===============================================
GCameraSDL* GCameraSDL::m_instance = 0;
//===============================================
GCameraSDL::GCameraSDL() {

}
//===============================================
GCameraSDL::~GCameraSDL() {

}
//===============================================
GCameraSDL* GCameraSDL::Instance() {
    if(m_instance == 0) {
        m_instance = new GCameraSDL;
    }
    return m_instance;
}
//===============================================
void GCameraSDL::initCamera(glm::vec3 position, glm::vec3 pointCible, glm::vec3 axeVertical) {
    m_phi = -35.26f;
    m_theta = -135.0f;
    m_axeVertical = axeVertical;
    m_position = position;
    m_pointCible = pointCible;
}
//===============================================
