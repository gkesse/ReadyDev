//===============================================
#ifndef _GDrawSDLRelic_
#define _GDrawSDLRelic_
//================================================
#include "GDrawSDL.h"
#include "GObjCabin.h"
#include "GObjGround.h"
#include "GObjCrystal.h"
//===============================================
class GDrawSDLRelic : public GDrawSDL {
public:
    GDrawSDLRelic();
    ~GDrawSDLRelic();

public:
    static GDrawSDLRelic* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();
    void rotateBox(const char* direction);
    void handleEvents(SDL_Event* event);
    void onKeyDown(SDL_Event* event);

private:
    static GDrawSDLRelic* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjCabin m_objCabin;
    GObjGround m_objGround;
    GObjGround m_objGround2;
    GObjCrystal m_objCrystal;
};
//===============================================
#endif
//===============================================
