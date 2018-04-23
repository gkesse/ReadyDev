//================================================
#ifndef _GEvent_
#define _GEvent_
//================================================
#include "GInclude.h"
//================================================
#include <QString>
//================================================
class GEvent {
public:
    GEvent();
    ~GEvent();

public:
    static GEvent* Instance();
    void handleEvents(SDL_Event* event);

private:
    static GEvent* m_instance;
};
//================================================
#endif
//================================================
