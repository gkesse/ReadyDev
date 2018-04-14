//===============================================
#ifndef _GWindow_
#define _GWindow_
//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
class GWindow {
public:
    GWindow();
    ~GWindow();

public:
    static GWindow* Instance();
    virtual void show(int* argc, char** argv) = 0;
    void setBackground();
    void setVertices();
    void draw();

private:
    static GWindow* m_instance;
};
//===============================================
#endif
//===============================================
