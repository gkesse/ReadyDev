//===============================================
#ifndef _GDrawSDLTextureObj_
#define _GDrawSDLTextureObj_
//================================================
#include "GDrawSDL.h"
#include "GObjBox.h"
//===============================================
class GDrawSDLTextureObj : public GDrawSDL {
public:
    GDrawSDLTextureObj();
    ~GDrawSDLTextureObj();

public:
    static GDrawSDLTextureObj* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();
    void handleEvents(SDL_Event* event);
    void onKeyDown(SDL_Event* event);

private:
    static GDrawSDLTextureObj* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    float m_angleU;
    float m_angleV;
    GObjBox m_objBox;
    GObjBox m_objBox2;
};
//===============================================
#endif
//===============================================
