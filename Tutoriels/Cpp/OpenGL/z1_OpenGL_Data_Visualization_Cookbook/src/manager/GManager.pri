include(C:\Users\Admin\Downloads\glfw-3.2.1.bin.WIN64\glfw-3.2.1.bin.WIN64\GGLFW.pri)

LIBS += \
    -lglfw3 -lgdi32 -lopengl32

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GProcess.h \
    $$PWD/GInclude.h \
    $$PWD/GSetting.h \
    $$PWD/GProcessPoint.h \
    $$PWD/GOpenGL.h \
    $$PWD/GProcessTriangle.h \
    $$PWD/GProcessLine.h \
    $$PWD/GProcessGrid.h \
    $$PWD/GDraw.h \
    $$PWD/GData.h \
    $$PWD/GMath.h \
    $$PWD/GProcessCallback.h \
    $$PWD/GKeyboard.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GSetting.cpp \
    $$PWD/GProcessPoint.cpp \
    $$PWD/GOpenGL.cpp \
    $$PWD/GProcessTriangle.cpp \
    $$PWD/GProcessLine.cpp \
    $$PWD/GProcessGrid.cpp \
    $$PWD/GDraw.cpp \
    $$PWD/GData.cpp \
    $$PWD/GMath.cpp \
    $$PWD/GProcessCallback.cpp \
    $$PWD/GKeyboard.cpp
