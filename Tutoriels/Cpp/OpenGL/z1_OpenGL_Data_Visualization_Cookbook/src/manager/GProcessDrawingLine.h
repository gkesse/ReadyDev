//===============================================
#ifndef _GProcessDrawingLine_
#define _GProcessDrawingLine_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct sVertex Vertex;
//===============================================
class GProcessDrawingLine : public GProcess {
public:
    GProcessDrawingLine();
    ~GProcessDrawingLine();

public:
    static GProcessDrawingLine* Instance();
    void run(int argc = 0, char** argv = 0);
    void drawLineDemo();
    void drawGrid(GLfloat width, GLfloat height, GLfloat grid_width);
    void drawLineSegment(Vertex v1, Vertex v2, GLfloat width=1.0f);

private:
    static GProcessDrawingLine* m_instance;
};
//===============================================
#endif
//===============================================
