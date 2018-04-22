//================================================
#ifndef _GDraw_
#define _GDraw_
//================================================
#include <iostream>
//================================================
#include <QMap>
//================================================
using namespace std;
//================================================
class GDraw {
public:
    GDraw();
    ~GDraw();

public:
    static GDraw* Instance();
    void initDraw();
    void draw();

private:
    static GDraw* m_instance;
};
//================================================
#endif
//================================================
