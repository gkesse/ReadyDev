include(C:\Users\sabine\Downloads\Gerard\SDL2-devel-2.0.8-mingw\SDL2-2.0.8\i686-w64-mingw32\GSDL.pri)
include(C:\Users\sabine\Downloads\Gerard\SDL2_image-devel-2.0.3-mingw\SDL2_image-2.0.3\i686-w64-mingw32\GSDLImage.pri)

LIBS += \
    -lmingw32 \
    -lSDL2main -lSDL2 -lSDL2_image.dll

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GWindow.h \
    $$PWD/GDraw.h \
    $$PWD/GTexture.h \
    $$PWD/GDrawTexture.h \
    $$PWD/GDrawBackground.h \
    $$PWD/GDrawTextureReduceMove.h \
    $$PWD/GWindowNormal.h \
    $$PWD/GWindowFullscreen.h \
    $$PWD/GDrawTextureFull.h \
    $$PWD/GDrawTextureAnimate.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GWindow.cpp \
    $$PWD/GDraw.cpp \
    $$PWD/GTexture.cpp \
    $$PWD/GDrawTexture.cpp \
    $$PWD/GDrawBackground.cpp \
    $$PWD/GDrawTextureReduceMove.cpp \
    $$PWD/GWindowNormal.cpp \
    $$PWD/GWindowFullscreen.cpp \
    $$PWD/GDrawTextureFull.cpp \
    $$PWD/GDrawTextureAnimate.cpp
