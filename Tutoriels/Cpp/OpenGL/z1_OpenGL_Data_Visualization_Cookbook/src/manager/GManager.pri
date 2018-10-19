include(C:\Users\sabine\Downloads\Gerard\glfw-3.2.1\glfw-3.2.1\GGLFW.pri)

LIBS += \
    -lglfw3 -lgdi32 -lopengl32

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GProcess.h \
    $$PWD/GInclude.h \
    $$PWD/GProcessGlfwApplication.h \
    $$PWD/GProcessDrawingPoints.h \
    $$PWD/GProcessDrawingLine.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GProcessGlfwApplication.cpp \
    $$PWD/GProcessDrawingPoints.cpp \
    $$PWD/GProcessDrawingLine.cpp
