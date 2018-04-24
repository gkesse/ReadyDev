//================================================
#ifndef _GInclude_
#define _GInclude_
//================================================
#include <iostream>
//===============================================
using namespace std;
//================================================
#define GLM_ENABLE_EXPERIMENTAL
//===============================================
#include <GL/glew.h>
#include <GLFW/glfw3.h>
#include <GL/freeglut.h>
#include <SDL2/SDL.h>
#include <QGLWidget>
#include <BulletDynamics/Dynamics/btDynamicsWorld.h>
#include <glm/gtc/matrix_transform.hpp>
#include <glm/gtx/transform2.hpp>
#include <glm/gtc/quaternion.hpp>
//================================================
#define BUFFER_OFFSET(a) ((void*)(a))
//================================================
#define PI (3.141592653589793)
#define TWOPI (6.2831853071795862)
#define TO_RADIANS(x) (x * 0.017453292519943295)
#define TO_DEGREES(x) (x * 57.29577951308232)
//================================================
typedef struct {
    GLenum type;
    const char* filename;
    GLuint shader;
} GShaderInfo;
//================================================
typedef struct {
    GLuint loc;
    const char* name;
} GAttribInfo;
//================================================
typedef struct {
    float x, y, z;
    float r, g, b, a;
} GVertexInfo;
//================================================
#endif
//================================================
