include(C:\Users\sabine\Downloads\Gerard\OpenCV-MinGW-Build-OpenCV-3.4.1\OpenCV-MinGW-Build-OpenCV-3.4.1\GOpenCV.pri)

LIBS += \
    -lopencv_core341 -lopencv_highgui341 -lopencv_imgcodecs341 \
    -lopencv_videoio341 -lopencv_imgproc341

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GProcess.h \
    $$PWD/GSetting.h \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GProcessImageLoad.h \
    $$PWD/GOpenCV.h \
    $$PWD/GProcessVideoPlay.h \
    $$PWD/GProcessTrackbarSlider.h \
    $$PWD/GTrackbar.h \
    $$PWD/GTrackbarNoSet.h \
    $$PWD/GTrackbarSet.h

SOURCES += \
    $$PWD/GProcess.cpp \
    $$PWD/GSetting.cpp \
    $$PWD/GConfig.cpp \
    $$PWD/GProcessImageLoad.cpp \
    $$PWD/GOpenCV.cpp \
    $$PWD/GProcessVideoPlay.cpp \
    $$PWD/GProcessTrackbarSlider.cpp \
    $$PWD/GTrackbar.cpp \
    $$PWD/GTrackbarNoSet.cpp \
    $$PWD/GTrackbarSet.cpp
