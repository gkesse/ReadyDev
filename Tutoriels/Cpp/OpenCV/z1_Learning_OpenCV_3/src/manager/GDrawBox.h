//================================================
#ifndef _GDrawBox_
#define _GDrawBox_
//================================================
#include "GDraw.h"
//================================================
class GDrawBox : public GDraw {
public:
    GDrawBox();
    ~GDrawBox();
	
public:
    static GDrawBox* Instance();
    void draw(const string& imageName);

private:
    static GDrawBox* m_instance;
    string m_mouseState;
    int m_x1;
    int m_y1;
    int m_x2;
    int m_y2;
};
//================================================
#endif
//================================================
