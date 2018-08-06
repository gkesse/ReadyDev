include(C:\Users\sabine\Downloads\Gerard\OpenCV-MinGW-Build-OpenCV-3.4.1\OpenCV-MinGW-Build-OpenCV-3.4.1\GOpenCV.pri)

LIBS += \
    -lopencv_core341 -lopencv_highgui341 -lopencv_imgcodecs341 \
    -lopencv_videoio341

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GProcess.h \
    $$PWD/GProcessDisplayPicture.h \
    $$PWD/GProcessReadVideo.h \
    $$PWD/GProcessTrackbarSlider.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GProcessDisplayPicture.cpp \
    $$PWD/GProcessReadVideo.cpp \
    $$PWD/GProcessTrackbarSlider.cpp

