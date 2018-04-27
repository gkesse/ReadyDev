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
    void initCamera(glm::vec3 cameraPosition, glm::vec3 targetPosition, glm::vec3 verticalAxis, float rotateSpeed, float translateSpeed);
    void orienter(const char* direction);
    void deplacer(const char* direction);
    void perspective(glm::mat4& projection, int width, int height);
    void lookAt(glm::mat4& modelView);
    void computeSettings();
    void setTargetPosition(glm::vec3 targetPosition);
    void setCameraPosition(glm::vec3 cameraPosition);
    void capturePointer(bool capture);
    void showPointer(bool show);

private:
    static GCameraSDL* m_instance;
    //===============================================
    const float PHI_MAX = 89.0f;
    //===============================================
    glm::vec3 m_verticalAxis;
    glm::vec3 m_cameraPosition;
    glm::vec3 m_targetPosition;
    //===============================================
    float m_rotateSpeed;
    float m_translateSpeed;
    //===============================================
    float m_phi;
    float m_theta;
    glm::vec3 m_orientation;
    glm::vec3 m_sideShift;
};
//===============================================
#endif
//===============================================
