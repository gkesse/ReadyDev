//================================================
#ifndef _GDraw_
#define _GDraw_
//================================================
#include "GInclude.h"
//================================================
class GDraw {
public:
    GDraw();
    ~GDraw();
	
public:
    static GDraw* Instance();
    void circle(const string& imageName, const int& xC, const int& yC, const int& rC, const uchar &color);
    void circle(const string& imageName, const int& xC, const int& yC, const int& rC, const uchar &red, const uchar& green, const uchar& blue);
    virtual void draw(const string& imageName) = 0;

private:
    static GDraw* m_instance;
};
//================================================
#endif
//================================================
