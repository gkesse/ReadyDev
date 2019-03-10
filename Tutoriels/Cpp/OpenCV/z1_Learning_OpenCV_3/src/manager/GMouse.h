//================================================
#ifndef _GMouse_
#define _GMouse_
//================================================
#include "GInclude.h"
//================================================
class GMouse {
public:
    GMouse();
    ~GMouse();
	
public:
    static GMouse* Instance();
    void callback(int event, int x, int y);
    int getEvent();
    int getX();
    int getY();

private:
    static GMouse* m_instance;
    int m_event;
    int m_x;
    int m_y;
};
//================================================
#endif
//================================================
