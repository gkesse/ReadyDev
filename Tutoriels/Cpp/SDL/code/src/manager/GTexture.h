//================================================
#ifndef _GTexture_
#define _GTexture_
//================================================
#include <iostream>
//================================================
#include <QMap>
//================================================
using namespace std;
//================================================
class GTexture {
public:
    GTexture();
    ~GTexture();

public:
    static GTexture* Instance();
    void loadTexture();
    void draw();

private:
    static GTexture* m_instance;
};
//================================================
#endif
//================================================
