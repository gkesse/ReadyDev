include(C:\Users\sabine\Downloads\Gerard\glfw-3.2.1\glfw-3.2.1\GGLFW.pri)

LIBS += \
    -lglfw3 -lgdi32 -lopengl32

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GProcess.h \
    $$PWD/GProcessWindow.h \
    $$PWD/GSetting.h \
    $$PWD/GWindow.h \
    $$PWD/GDraw.h \
    $$PWD/GDrawTriangle.h \
    $$PWD/GAnimate.h \
    $$PWD/GAnimateNoAnimate.h \
    $$PWD/GAnimateRotate.h \
    $$PWD/GAntiAliasing.h \
    $$PWD/GAntiAliasingDisable.h \
    $$PWD/GAntiAliasingEnable.h \
    $$PWD/GDrawPoint.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GProcessWindow.cpp \
    $$PWD/GSetting.cpp \
    $$PWD/GWindow.cpp \
    $$PWD/GDraw.cpp \
    $$PWD/GDrawTriangle.cpp \
    $$PWD/GAnimate.cpp \
    $$PWD/GAnimateNoAnimate.cpp \
    $$PWD/GAnimateRotate.cpp \
    $$PWD/GAntiAliasing.cpp \
    $$PWD/GAntiAliasingDisable.cpp \
    $$PWD/GAntiAliasingEnable.cpp \
    $$PWD/GDrawPoint.cpp
