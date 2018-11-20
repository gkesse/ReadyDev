//===============================================
#include "GProcessOpenGL.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GOpenGL.h"
#include "GTrackbar.h"
//===============================================
GProcessOpenGL* GProcessOpenGL::m_instance = 0;
cv::ogl::Texture2D GProcessOpenGL::m_texture;
int GProcessOpenGL::m_rotX;
int GProcessOpenGL::m_rotY;
//===============================================
uchar gColorMap[][3] = {
    {255, 0, 0}, {0, 255, 0}, {0, 0, 255}, {127, 0, 0}, {0, 127, 0}, {0, 0, 127},
    {255, 255, 0}, {255, 0, 255}, {0, 255, 255}, {127, 127, 0}, {127, 0, 127}, {0, 127, 127}
};
//===============================================
GProcessOpenGL::GProcessOpenGL() {
    m_rotX = 45;
    m_rotY = 45;
}
//===============================================
GProcessOpenGL::~GProcessOpenGL() {

}
//===============================================
GProcessOpenGL* GProcessOpenGL::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessOpenGL;
    }
    return m_instance;
}
//===============================================
void GProcessOpenGL::run(int argc, char** argv) {
    cv::Mat lImg;

    GImage::Instance()->load("res/img/fruits.png", lImg);

    GWindow::Instance()->create("OpenCV | ReadyDev", cv::WINDOW_OPENGL);
    GWindow::Instance()->resize("OpenCV | ReadyDev", lImg.cols, lImg.rows);

    GOpenGL::Instance()->setTexture(m_texture, lImg);
    GOpenGL::Instance()->setCallback("OpenCV | ReadyDev", onOpenGlDraw);
    GTrackbar::Instance()->create("RotX", "OpenCV | ReadyDev", &m_rotX, 360, onTrackbar);
    GTrackbar::Instance()->create("RotY", "OpenCV | ReadyDev", &m_rotY, 360, onTrackbar);

    GDelay::Instance()->loop();
    GOpenGL::Instance()->setCallback("OpenCV | ReadyDev", 0, 0);
    GWindow::Instance()->destroy("OpenCV | ReadyDev");
}
//===============================================
void GProcessOpenGL::onOpenGlDraw(void* params) {
    glEnable(GL_TEXTURE_2D);
    m_texture.bind();
    cv::ogl::render(m_texture);
    glDisable(GL_TEXTURE_2D);

    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();

    glTranslatef(0, 0, -0.5);
    glRotatef(m_rotX, 1, 0, 0);
    glRotatef(m_rotY, 0, 1, 0);
    glRotatef(0, 0, 0, 1);

    glEnable(GL_DEPTH_TEST);
    glDepthFunc(GL_LESS);

    static const int coords[6][4][3] = {
        { { +1, -1, -1 }, { -1, -1, -1 }, { -1, +1, -1 }, { +1, +1, -1 } },
        { { +1, +1, -1 }, { -1, +1, -1 }, { -1, +1, +1 }, { +1, +1, +1 } },
        { { +1, -1, +1 }, { +1, -1, -1 }, { +1, +1, -1 }, { +1, +1, +1 } },
        { { -1, -1, -1 }, { -1, -1, +1 }, { -1, +1, +1 }, { -1, +1, -1 } },
        { { +1, -1, +1 }, { -1, -1, +1 }, { -1, -1, -1 }, { +1, -1, -1 } },
        { { -1, -1, +1 }, { +1, -1, +1 }, { +1, +1, +1 }, { -1, +1, +1 } }
    };

    for(int i = 0; i < 6; ++i) {
        glColor3ub(gColorMap[i][0], gColorMap[i][1], gColorMap[i][3]);
        glBegin(GL_QUADS);
        for(int j = 0; j < 4; ++j) {
            glVertex3d(0.2*coords[i][j][0], 0.2*coords[i][j][1], 0.2*coords[i][j][2]);
        }
        glEnd();
    }
}
//===============================================
void GProcessOpenGL::onTrackbar(int pos, void* params) {
    GOpenGL::Instance()->update("OpenCV | ReadyDev");
}
//===============================================
