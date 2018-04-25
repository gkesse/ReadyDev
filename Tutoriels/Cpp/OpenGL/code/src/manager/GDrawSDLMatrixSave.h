//===============================================
#ifndef _GDrawSDLMatrixSave_
#define _GDrawSDLMatrixSave_
//================================================
#include "GDrawSDL.h"
#include "GObjCube.h"
//===============================================
class GDrawSDLMatrixSave : public GDrawSDL {
public:
    GDrawSDLMatrixSave();
    ~GDrawSDLMatrixSave();

public:
    static GDrawSDLMatrixSave* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateDraw();
    void draw();

private:
    static GDrawSDLMatrixSave* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    GObjCube m_objCube;
    float m_angle;
};
//===============================================
#endif
//===============================================
