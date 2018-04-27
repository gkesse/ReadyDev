//===============================================
#include "GCamera.h"
//===============================================
GCamera* GCamera::m_instance = 0;
//===============================================
GCamera::GCamera() {

}
//===============================================
GCamera::~GCamera() {

}
//===============================================
GCamera* GCamera::Instance() {
    if(m_instance == 0) {
        m_instance = new GCamera;
    }
    return m_instance;
}
//===============================================
void GCamera::viewport(int width, int height) {
    glViewport(0, 0, width, height);
}
//===============================================
void GCamera::perspectiveOrtho(int width, int height) {
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    float lRatio = (float)width/height;
    float lLeft = -lRatio;
    float lRight = lRatio;
    float lBottom = -1.0f;
    float lTop = 1.0f;
    float lZNear = 1.0f;
    float lZFar = -1.0f;
    glOrtho(lLeft, lRight, lBottom, lTop, lZNear, lZFar);
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();
}
//===============================================
void GCamera::initCamera(glm::vec3 cameraPosition, glm::vec3 targetPosition, glm::vec3 verticalAxis, float rotateSpeed, float translateSpeed) {
    m_verticalAxis = verticalAxis;
    m_cameraPosition = cameraPosition;
    m_targetPosition = targetPosition;
    m_rotateSpeed = rotateSpeed;
    m_translateSpeed = translateSpeed;
    computeSettings();
}
//===============================================
void GCamera::rotate(const char* direction) {
    if(QString(direction) == "UP") {m_phi += m_rotateSpeed;}
    if(QString(direction) == "DOWN") {m_phi -= m_rotateSpeed;}
    if(QString(direction) == "LEFT") {m_theta += m_rotateSpeed;}
    if(QString(direction) == "RIGHT") {m_theta -= m_rotateSpeed;}
    if(QString(direction) == "LEFT_TURN") {m_omega += m_rotateSpeed;}
    if(QString(direction) == "RIGHT_TURN") {m_omega -= m_rotateSpeed;}
    if(m_phi > PHI_MAX) m_phi = PHI_MAX;
    else if(m_phi < -PHI_MAX) m_phi = -PHI_MAX;
    if(m_theta >= 360.0f) m_theta -= 360.0f;
    else if(m_theta <= 0) m_theta += 360.0f;
    if(m_theta >= 360.0f) m_theta -= 360.0f;
    else if(m_theta <= 0) m_theta += 360.0f;

    float lPhi = TO_RADIANS(m_phi);
    float lTheta = TO_RADIANS(m_theta);

    if(m_verticalAxis.x == 1.0) {
        m_orientation.x = sin(lPhi);
        m_orientation.y = cos(lPhi) * cos(lTheta);
        m_orientation.z = cos(lPhi) * sin(lTheta);
    }
    else if(m_verticalAxis.y == 1.0) {
        m_orientation.x = cos(lPhi) * sin(lTheta);
        m_orientation.y = sin(lPhi);
        m_orientation.z = cos(lPhi) * cos(lTheta);
    }
    else {
        m_orientation.x = cos(lPhi) * cos(lTheta);
        m_orientation.y = cos(lPhi) * sin(lTheta);
        m_orientation.z = sin(lPhi);
    }
    m_sideShift = cross(m_verticalAxis, m_orientation);
    m_sideShift = normalize(m_sideShift);
    m_verticalShift = cross(m_orientation, m_sideShift);
    m_verticalShift = normalize(m_verticalShift);
    m_targetPosition = m_cameraPosition + m_orientation;
}
//===============================================
void GCamera::move(const char* direction) {
    if(QString(direction) == "UP") {
        m_cameraPosition += m_verticalShift * m_translateSpeed;
        m_targetPosition = m_cameraPosition + m_orientation;
    }
    if(QString(direction) == "DOWN") {
        m_cameraPosition -= m_verticalShift * m_translateSpeed;
        m_targetPosition = m_cameraPosition + m_orientation;
    }
    if(QString(direction) == "FORWARD") {
        m_cameraPosition += m_orientation * m_translateSpeed;
        m_targetPosition = m_cameraPosition + m_orientation;
    }
    if(QString(direction) == "BACKWARD") {
        m_cameraPosition -= m_orientation * m_translateSpeed;
        m_targetPosition = m_cameraPosition + m_orientation;
    }
    if(QString(direction) == "LEFT") {
        m_cameraPosition += m_sideShift * m_translateSpeed;
        m_targetPosition = m_cameraPosition + m_orientation;
    }
    if(QString(direction) == "RIGHT") {
        m_cameraPosition -= m_sideShift * m_translateSpeed;
        m_targetPosition = m_cameraPosition + m_orientation;
    }
}
//===============================================
void GCamera::perspective(glm::mat4& projection, int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
}
//===============================================
void GCamera::lookAt(glm::mat4& modelView) {
    modelView = glm::lookAt(m_cameraPosition, m_targetPosition, m_verticalAxis);
}
//===============================================
void GCamera::computeSettings() {
    m_orientation = m_targetPosition - m_cameraPosition;
    m_orientation = normalize(m_orientation);
    if(m_verticalAxis.x == 1.0f) {
        m_phi = asin(m_orientation.x);
        m_theta = acos(m_orientation.y / cos(m_phi));
        if(m_orientation.y < 0.0f) {m_theta *= -1.0f;}
    }
    else if(m_verticalAxis.y == 1.0f) {
        m_phi = asin(m_orientation.y);
        m_theta = acos(m_orientation.z / cos(m_phi));
        if(m_orientation.z < 0.0f) {m_theta *= -1.0f;}
        m_omega = acos(-m_orientation.z);
        if(m_orientation.z < 0.0f) {m_theta *= -1.0f;}
    }
    else {
        m_phi = asin(m_orientation.x);
        m_theta = acos(m_orientation.z / cos(m_phi));
        if(m_orientation.z < 0.0f) {m_theta *= -1.0f;}
    }
    m_phi = TO_DEGREES(m_phi);
    m_theta = TO_DEGREES(m_theta);
    m_sideShift = cross(m_verticalAxis, m_orientation);
    m_sideShift = normalize(m_sideShift);
    m_verticalShift = cross(m_orientation, m_sideShift);
    m_verticalShift = normalize(m_verticalShift);
}
//===============================================
void GCamera::setTargetPosition(glm::vec3 targetPosition) {
    m_targetPosition = targetPosition;
    computeSettings();
}
//===============================================
void GCamera::setCameraPosition(glm::vec3 cameraPosition) {
    m_cameraPosition = cameraPosition;
    computeSettings();
}
//===============================================
void GCamera::capturePointer(bool capture) {
    if(capture) SDL_SetRelativeMouseMode(SDL_TRUE);
    else SDL_SetRelativeMouseMode(SDL_FALSE);
}
//===============================================
void GCamera::showPointer(bool show) {
    if(show) SDL_ShowCursor(SDL_ENABLE);
    else SDL_ShowCursor(SDL_DISABLE);
}
//===============================================
