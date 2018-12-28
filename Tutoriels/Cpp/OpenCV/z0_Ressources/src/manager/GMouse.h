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
    void setCallback(const string& title, cv::MouseCallback onMouse, void* params = 0);

private:
    static GMouse* m_instance;
};
//================================================
#endif
//================================================
