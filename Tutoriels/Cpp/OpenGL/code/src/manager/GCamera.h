//===============================================
#ifndef _GCamera_
#define _GCamera_
//================================================
#include "GInclude.h"
//===============================================
class GCamera {
public:
    GCamera();
    ~GCamera();

public:
    static GCamera* Instance();
    void viewport(int width, int height);
    void perspectiveOrtho(int width, int height);
    void initCamera(glm::vec3 cameraPosition, glm::vec3 targetPosition, glm::vec3 verticalAxis, float rotateSpeed, float translateSpeed);
    void rotate(const char* direction);
    void move(const char* direction);
    void perspective(glm::mat4& projection, int width, int height);
    void lookAt(glm::mat4& modelView);
    void computeSettings();
    void setTargetPosition(glm::vec3 targetPosition);
    void setCameraPosition(glm::vec3 cameraPosition);
    void capturePointer(bool capture);
    void showPointer(bool show);

private:
    static GCamera* m_instance;
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
    float m_omega;
    glm::vec3 m_orientation;
    glm::vec3 m_sideShift;
    glm::vec3 m_verticalShift;
};
//===============================================
#endif
//===============================================
