//===============================================
#ifndef _GDrawSDLCamera_
#define _GDrawSDLCamera_
//================================================
#include "GDrawSDL.h"
#include "GObjBox.h"
#include "GObjLand.h"
//===============================================
class GDrawSDLCamera : public GDrawSDL {
public:
    GDrawSDLCamera();
    ~GDrawSDLCamera();

public:
    static GDrawSDLCamera* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();
    void rotateBox(const char* direction);
    void handleEvents(SDL_Event* event);
    void onKeyDown(SDL_Event* event);

private:
    static GDrawSDLCamera* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    float m_angleU;
    float m_angleV;
    GObjBox m_objBox;
    GObjBox m_objBox2;
    GObjLand m_objLand;
};
//===============================================
#endif
//===============================================
