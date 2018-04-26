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
void GCameraSDL::orienter(int xRel, int yRel) {
    // Récupération des angles
    m_phi += -yRel * 0.5;
    m_theta += -xRel * 0.5;
    // Limitation de l'angle phi
    if(m_phi > 89.0)
        m_phi = 89.0;
    else if(m_phi < -89.0)
        m_phi = -89.0;
    // Conversion des angles en radian
    float phiRadian = m_phi * M_PI / 180;
    float thetaRadian = m_theta * M_PI / 180;
    // Si l'axe vertical est l'axe X
    if(m_axeVertical.x == 1.0)
    {
        // Calcul des coordonnées sphériques
        m_orientation.x = sin(phiRadian);
        m_orientation.y = cos(phiRadian) * cos(thetaRadian);
        m_orientation.z = cos(phiRadian) * sin(thetaRadian);
    }
    // Si c'est l'axe Y
    else if(m_axeVertical.y == 1.0)
    {
        // Calcul des coordonnées sphériques
        m_orientation.x = cos(phiRadian) * sin(thetaRadian);
        m_orientation.y = sin(phiRadian);
        m_orientation.z = cos(phiRadian) * cos(thetaRadian);
    }
}
//===============================================
void GCameraSDL::deplacer(int direction, int xRel, int yRel) {
    if(direction == 0) {
        orienter(xRel, yRel);
    }
    if(direction == 1) {
        m_position = m_position + m_orientation * 0.5f;
        m_pointCible = m_position + m_orientation;
    }
    if(direction == 2) {
        m_position = m_position - m_orientation * 0.5f;
        m_pointCible = m_position + m_orientation;
    }
    if(direction == 3) {
        m_position = m_position + m_deplacementLateral * 0.5f;
        m_pointCible = m_position + m_orientation;
    }
    if(direction == 4) {
        m_position = m_position - m_deplacementLateral * 0.5f;
        m_pointCible = m_position + m_orientation;
    }
}
//===============================================
void GCameraSDL::lookAt(glm::mat4& modelView) {
    modelView = glm::lookAt(m_position, m_pointCible, m_axeVertical);
}
//===============================================
