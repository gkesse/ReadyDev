//================================================
#ifndef _GDrawPoint_
#define _GDrawPoint_
//================================================
#include "GDraw.h"
//================================================
typedef struct sGVertex GVertex;
//================================================
class GDrawPoint : public GDraw {
public:
    GDrawPoint();
    ~GDrawPoint();
	
public:
    static GDrawPoint* Instance();
    void draw();
    void drawPoint(const GVertex& v, const GLfloat &size);

private:
    static GDrawPoint* m_instance;
};
//================================================
#endif
//================================================
