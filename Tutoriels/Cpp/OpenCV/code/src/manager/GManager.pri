include(C:\Users\sabine\Downloads\Gerard\OpenCV-MinGW-Build-OpenCV-3.4.1\OpenCV-MinGW-Build-OpenCV-3.4.1\GOpenCV.pri)

LIBS += \
    -lopencv_core341 -lopencv_highgui341 -lopencv_imgcodecs341 \
    -lopencv_videoio341

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GImage.h \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GProcess.h \
    $$PWD/GProcessImageLoad.h \
    $$PWD/GProcessVideoRead.h \
    $$PWD/GVideo.h

SOURCES += \
    $$PWD/GImage.cpp \
    $$PWD/GConfig.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GProcessImageLoad.cpp \
    $$PWD/GProcessVideoRead.cpp \
    $$PWD/GVideo.cpp

