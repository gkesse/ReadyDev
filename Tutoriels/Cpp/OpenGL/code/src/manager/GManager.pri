include(C:\Users\gerar\Downloads\OpenGL\freeglut-3.0.0\freeglut-3.0.0\GFreeGLUT.pri)
include(C:\Users\gerar\Downloads\OpenGL\glew-2.1.0-win32\glew-2.1.0\GGLEW.pri)
include(C:\Users\gerar\Downloads\SDL\SDL2-devel-2.0.8-mingw\SDL2-2.0.8\i686-w64-mingw32\GSDL.pri)
include(C:\Users\gerar\Downloads\OpenGL\bullet3-master\bullet3-master\GBullet.pri)
include(C:\Users\gerar\Downloads\OpenGL\glfw-3.2.1\glfw-3.2.1\GGLFW.pri)
include(C:\Users\gerar\Downloads\OpenGL\gl3w-master\gl3w-master\GL3W.pri)

LIBS += \
    -lmingw32 -lopengl32 \
    -lglew32 -lfreeglut.dll -lglfw3 \
    -lSDL2main -lSDL2 -lgdi32


INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GWindow.h \
    $$PWD/GConfig.h \
    $$PWD/GWindowGLUT.h \
    $$PWD/GWindowSDL.h \
    $$PWD/GDraw.h \
    $$PWD/GDrawSDL.h \
    $$PWD/GDrawGLUT.h \
    $$PWD/GVertex.h \
    $$PWD/GShader.h \
    $$PWD/GFile.h \
    $$PWD/GDrawSDLSimple.h \
    $$PWD/GDrawSDLColor.h \
    $$PWD/GWindowQt.h \
    $$PWD/GWindowQtForm.h \
    $$PWD/GWindowQtFormGL.h \
    $$PWD/GWindowGLFW.h

SOURCES += \
    $$PWD/GWindow.cpp \
    $$PWD/GConfig.cpp \
    $$PWD/GWindowGLUT.cpp \
    $$PWD/GWindowSDL.cpp \
    $$PWD/GDraw.cpp \
    $$PWD/GDrawSDL.cpp \
    $$PWD/GDrawGLUT.cpp \
    $$PWD/GVertex.cpp \
    $$PWD/GShader.cpp \
    $$PWD/GFile.cpp \
    $$PWD/GDrawSDLSimple.cpp \
    $$PWD/GDrawSDLColor.cpp \
    $$PWD/GWindowQt.cpp \
    $$PWD/GWindowQtForm.cpp \
    $$PWD/GWindowQtFormGL.cpp \
    $$PWD/GWindowGLFW.cpp

FORMS += \
    $$PWD/GWindowQtForm.ui
