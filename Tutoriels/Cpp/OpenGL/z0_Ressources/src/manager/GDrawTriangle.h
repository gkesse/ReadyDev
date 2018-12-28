//================================================
#ifndef _GDrawTriangle_
#define _GDrawTriangle_
//================================================
#include "GDraw.h"
//================================================
typedef struct sGVertex GVertex;
//================================================
class GDrawTriangle : public GDraw {
public:
    GDrawTriangle();
    ~GDrawTriangle();
	
public:
    static GDrawTriangle* Instance();
    void draw();
    void drawTriangle(const GVertex& v1, const GVertex& v2, const GVertex& v3);

private:
    static GDrawTriangle* m_instance;
};
//================================================
#endif
//================================================
