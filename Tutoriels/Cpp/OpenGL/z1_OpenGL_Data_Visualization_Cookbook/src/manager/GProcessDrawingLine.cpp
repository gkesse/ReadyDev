//===============================================
#include "GProcessDrawingLine.h"
//===============================================
GProcessDrawingLine* GProcessDrawingLine::m_instance = 0;
//===============================================
struct sVertex {
    GLfloat x, y, z;
    GLfloat r, g, b, a;
};
//===============================================
GProcessDrawingLine::GProcessDrawingLine() {

}
//===============================================
GProcessDrawingLine::~GProcessDrawingLine() {

}
//===============================================
GProcessDrawingLine* GProcessDrawingLine::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDrawingLine;
    }
    return m_instance;
}
//===============================================
void GProcessDrawingLine::run(int argc, char **argv) {
    cout << "\n### Dessiner des lignes\n\n";
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

    glEnable(GL_LINE_SMOOTH);
    glHint(GL_LINE_SMOOTH_HINT, GL_NICEST);
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

        glOrtho(-ratio, ratio, -1.f, 1.f, 1.f, -1.f);
        glMatrixMode(GL_MODELVIEW);

        glLoadIdentity();
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);

        drawLineDemo();

        glfwSwapBuffers(window);
        glfwPollEvents();
    }

    glfwDestroyWindow(window);
    glfwTerminate();
}
//===============================================
void GProcessDrawingLine::drawLineDemo() {
    drawGrid(5.0f, 1.0f, 0.1f);

    Vertex v1 = {-5.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 0.7f};
    Vertex v2 = {5.0f, 0.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.7f};
    Vertex v3 = {0.0f, 1.0f, 0.0f, 0.0f, 0.0f, 1.0f, 0.7f};
    Vertex v4 = {0.0f, -1.0f, 0.0f, 0.0f, 0.0f, 1.0f, 0.7f};

    drawLineSegment(v1, v2, 10.0f);
    drawLineSegment(v3, v4, 10.0f);
}
//===============================================
void GProcessDrawingLine::drawGrid(GLfloat width, GLfloat height, GLfloat grid_width) {
    //horizontal lines
    for(float i=-height; i<height; i+=grid_width){
        Vertex v1 = {-width, i, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        Vertex v2 = {width, i, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        drawLineSegment(v1, v2);
    }
    //vertical lines
    for(float i=-width; i<width; i+=grid_width){
        Vertex v1 = {i, -height, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        Vertex v2 = {i, height, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        drawLineSegment(v1, v2);
    }
}
//===============================================
void GProcessDrawingLine::drawLineSegment(Vertex v1, Vertex v2, GLfloat width) {
    glLineWidth(width);

    glBegin(GL_LINES);
    glColor4f(v1.r, v1.g, v1.b, v1.a);
    glVertex3f(v1.x, v1.y, v1.z);
    glColor4f(v2.r, v2.g, v2.b, v2.a);
    glVertex3f(v2.x, v2.y, v2.z);
    glEnd();
}
//===============================================
