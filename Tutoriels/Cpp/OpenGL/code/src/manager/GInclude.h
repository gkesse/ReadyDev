//================================================
#ifndef _GOpenGL_
#define _GOpenGL_
//================================================
#include <GL/glew.h>
#include <GLFW/glfw3.h>
#include <GL/freeglut.h>
#include <SDL2/SDL.h>
#include <QGLWidget>
#include <BulletDynamics/Dynamics/btDynamicsWorld.h>
#include <glm/gtc/matrix_transform.hpp>
//================================================
#define BUFFER_OFFSET(a) ((void*)(a))
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
#endif
//================================================
