include(C:\Users\gerar\Downloads\OpenGL\freeglut-3.0.0\freeglut-3.0.0\GFreeGLUT.pri)
include(C:\Users\gerar\Downloads\OpenGL\glew-2.1.0-win32\glew-2.1.0\GGLEW.pri)
include(C:\Users\gerar\Downloads\SDL\SDL2-devel-2.0.8-mingw\SDL2-2.0.8\i686-w64-mingw32\GSDL.pri)

LIBS += \
      -lmingw32 -lopengl32 -lglew32 -lfreeglut.dll -lSDL2main -lSDL2


INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GWindow.h \
    $$PWD/GConfig.h \
    $$PWD/GWindowGLUT.h \
    $$PWD/GWindowSDL.h \
    $$PWD/GDraw.h \
    $$PWD/GDrawSDL.h

SOURCES += \
    $$PWD/GWindow.cpp \
    $$PWD/GConfig.cpp \
    $$PWD/GWindowGLUT.cpp \
    $$PWD/GWindowSDL.cpp \
    $$PWD/GDraw.cpp \
    $$PWD/GDrawSDL.cpp
