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
void GCameraSDL::initCamera(glm::vec3 position, glm::vec3 pointCible, glm::vec3 axeVertical, float sensibilite, float vitesse) {
    m_axeVertical = axeVertical;
    m_position = position;
    m_pointCible = pointCible;
    m_sensibilite = sensibilite;
    m_vitesse = vitesse;
    computeSettings();
}
//===============================================
void GCameraSDL::orienter(const char* direction) {
    if(QString(direction) == "UP") {m_phi += m_sensibilite;}
    if(QString(direction) == "DOWN") {m_phi -= m_sensibilite;}
    if(QString(direction) == "LEFT") {m_theta += m_sensibilite;}
    if(QString(direction) == "RIGHT") {m_theta -= m_sensibilite;}
    if(m_phi > 89.0) m_phi = 89.0;
    else if(m_phi < -89.0) m_phi = -89.0;
    if(m_theta >= 360.0f) m_theta -= 360.0f;
    else if(m_theta <= 0) m_theta += 360.0f;

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
    // Sinon c'est l'axe Z
    else
    {
        // Calcul des coordonnées sphériques
        m_orientation.x = cos(phiRadian) * cos(thetaRadian);
        m_orientation.y = cos(phiRadian) * sin(thetaRadian);
        m_orientation.z = sin(phiRadian);
    }
    // Calcul de la normale
    m_deplacementLateral = cross(m_axeVertical, m_orientation);
    m_deplacementLateral = normalize(m_deplacementLateral);
    // Calcul du point ciblé pour OpenGL
    m_pointCible = m_position + m_orientation;
}
//===============================================
void GCameraSDL::deplacer(const char* direction) {
    if(QString(direction) == "UP") {
        m_position += m_orientation * m_vitesse;
        m_pointCible = m_position + m_orientation;
    }
    if(QString(direction) == "DOWN") {
        m_position -= m_orientation * m_vitesse;
        m_pointCible = m_position + m_orientation;
    }
    if(QString(direction) == "LEFT") {
        m_position = m_position + m_deplacementLateral * m_vitesse;
        m_pointCible = m_position + m_orientation;
    }
    if(QString(direction) == "RIGHT") {
        m_position = m_position - m_deplacementLateral * m_vitesse;
        m_pointCible = m_position + m_orientation;
    }
}
//===============================================
void GCameraSDL::perspective(glm::mat4& projection, int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
}
//===============================================
void GCameraSDL::lookAt(glm::mat4& modelView) {
    modelView = glm::lookAt(m_position, m_pointCible, m_axeVertical);
}
//===============================================
void GCameraSDL::computeSettings() {
    // Calcul du vecteur orientation
    m_orientation = m_pointCible - m_position;
    m_orientation = normalize(m_orientation);
    // Si l'axe vertical est l'axe X
    if(m_axeVertical.x == 1.0)
    {
        // Calcul des angles
        m_phi = asin(m_orientation.x);
        m_theta = acos(m_orientation.y / cos(m_phi));
        if(m_orientation.y < 0)
            m_theta *= -1;
    }
    // Si c'est l'axe Y
    else if(m_axeVertical.y == 1.0)
    {
        // Calcul des angles
        m_phi = asin(m_orientation.y);
        m_theta = acos(m_orientation.z / cos(m_phi));
        if(m_orientation.z < 0)
            m_theta *= -1;
    }
    // Sinon c'est l'axe Z
    else
    {
        // Calcul des angles
        m_phi = asin(m_orientation.x);
        m_theta = acos(m_orientation.z / cos(m_phi));
        if(m_orientation.z < 0)
            m_theta *= -1;
    }
    // Conversion en degrés
    m_phi = m_phi * 180 / M_PI;
    m_theta = m_theta * 180 / M_PI;
    m_deplacementLateral = cross(m_axeVertical, m_orientation);
    m_deplacementLateral = normalize(m_deplacementLateral);
}
//===============================================
void GCameraSDL::setPointcible(glm::vec3 pointCible) {
    m_pointCible = pointCible;
    computeSettings();
}
//===============================================
void GCameraSDL::setPosition(glm::vec3 position) {
    m_position = position;
    m_pointCible = m_position + m_orientation;
}
//===============================================
void GCameraSDL::capturerPointeur(bool reponse) {
    if(reponse) SDL_SetRelativeMouseMode(SDL_TRUE);
    else SDL_SetRelativeMouseMode(SDL_FALSE);
}
//===============================================
void GCameraSDL::afficherPointeur(bool reponse) {
    if(reponse) SDL_ShowCursor(SDL_ENABLE);
    else SDL_ShowCursor(SDL_DISABLE);
}
//===============================================
