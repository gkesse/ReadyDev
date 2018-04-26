//===============================================
#ifndef _GCameraSDL_
#define _GCameraSDL_
//================================================
#include "GInclude.h"
//===============================================
class GCameraSDL {
public:
    GCameraSDL();
    ~GCameraSDL();

public:
    static GCameraSDL* Instance();
    void initCamera(glm::vec3 position, glm::vec3 pointCible, glm::vec3 axeVertical);

private:
    static GCameraSDL* m_instance;
    float m_phi;
    float m_theta;
    glm::vec3 m_orientation;
    glm::vec3 m_axeVertical;
    glm::vec3 m_deplacementLateral;
    glm::vec3 m_position;
    glm::vec3 m_pointCible;
};
//===============================================
#endif
//===============================================
