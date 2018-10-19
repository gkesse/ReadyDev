//===============================================
#include "GProcessDrawingPoints.h"
//===============================================
GProcessDrawingPoints* GProcessDrawingPoints::m_instance = 0;
//===============================================
struct sVertex {
    GLfloat x, y, z;
    GLfloat r, g, b, a;
};
//===============================================
GProcessDrawingPoints::GProcessDrawingPoints() {

}
//===============================================
GProcessDrawingPoints::~GProcessDrawingPoints() {

}
//===============================================
GProcessDrawingPoints* GProcessDrawingPoints::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDrawingPoints;
    }
    return m_instance;
}
//===============================================
void GProcessDrawingPoints::run(int argc, char **argv) {
    cout << "\n### Dessiner des points\n\n";
    GLFWwindow* window;

    if(!glfwInit()) {
        return;
    }

    window = glfwCreateWindow(400, 400, "OpenGL | ReadyDev", NULL, NULL);

    if(!window) {
        glfwTerminate();
        return;
    }

    glfwMakeContextCurrent(window);

    glEnable(GL_POINT_SMOOTH);
    glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);
    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);

    while(!glfwWindowShouldClose(window)) {
        float ratio;
        int width, height;
        glfwGetFramebufferSize(window, &width, &height);
        ratio = (float) width / (float)height;
        glViewport(0, 0, width, height);
        glClear(GL_COLOR_BUFFER_BIT);

        glMatrixMode(GL_PROJECTION);
        glLoadIdentity();
        //Orthographic Projection
        glOrtho(-ratio, ratio, -1.f, 1.f, 1.f, -1.f);
        glMatrixMode(GL_MODELVIEW);
        glLoadIdentity();
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);

        drawPointsDemo(width, height);

        glfwSwapBuffers(window);
        glfwPollEvents();
    }

    glfwDestroyWindow(window);
    glfwTerminate();
    exit(EXIT_SUCCESS);
}
//===============================================
void GProcessDrawingPoints::drawPointsDemo(int width, int height) {
    GLfloat size=5.0f;
    for(GLfloat x = 0.0f; x<=1.0f; x+=0.2f, size+=5) {
        Vertex v1 = {x, 0.0f, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        drawPoint(v1, size);
    }
}
//===============================================
void GProcessDrawingPoints::drawPoint(Vertex v1, GLfloat point_size) {
    glPointSize(point_size);
    glBegin(GL_POINTS);
    glColor4f(v1.r, v1.g, v1.b, v1.a);
    glVertex3f(v1.x, v1.y, v1.z);
    glEnd();
}
//===============================================
