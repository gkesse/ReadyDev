//================================================
#ifndef _GVertex_
#define _GVertex_
//================================================
#include <iostream>
//================================================
#include <GL/gl.h>
//================================================
using namespace std;
//================================================
class GVertex {
public:
	GVertex();
	~GVertex();
	
public:
	static GVertex* Instance();
    void loadVertex1D(float vertex[], float data[], const int& index, const int& size);
    void loadVertex2D(float vertex[][2], float data[][2], const int& row);
    void loadVertexGrid(GLfloat vertex[][2], const int& row);
	
private:
	static GVertex* m_instance;
};
//================================================
#endif
//================================================
