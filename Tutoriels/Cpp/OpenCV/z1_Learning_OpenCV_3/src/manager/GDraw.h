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
    void cercle(const string& imageName, const int& xC, const int& yC, const int& rC, const uchar &color);
    void cercle(const string& imageName, const int& xC, const int& yC, const int& rC, const uchar &red, const uchar& green, const uchar& blue);

private:
    static GDraw* m_instance;
};
//================================================
#endif
//================================================
