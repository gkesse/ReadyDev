//===============================================
#ifndef _GProcessDrawingPoints_
#define _GProcessDrawingPoints_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct sVertex Vertex;
//===============================================
class GProcessDrawingPoints : public GProcess {
public:
    GProcessDrawingPoints();
    ~GProcessDrawingPoints();

public:
    static GProcessDrawingPoints* Instance();
    void run(int argc = 0, char** argv = 0);
    void drawPointsDemo(int width, int height);
    void drawPoint(Vertex v1, GLfloat point_size);

private:
    static GProcessDrawingPoints* m_instance;
};
//===============================================
#endif
//===============================================
