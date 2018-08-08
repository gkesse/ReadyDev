include(C:\Users\sabine\Downloads\Gerard\OpenCV-MinGW-Build-OpenCV-3.4.1\OpenCV-MinGW-Build-OpenCV-3.4.1\GOpenCV.pri)

LIBS += \
    -lopencv_core341 -lopencv_highgui341 -lopencv_imgcodecs341 \
    -lopencv_videoio341 -lopencv_imgproc341

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GProcess.h \
    $$PWD/GProcessDisplayPicture.h \
    $$PWD/GProcessReadVideo.h \
    $$PWD/GProcessTrackbarSlider.h \
    $$PWD/GProcessSmoothingImage.h \
    $$PWD/GProcessImagePyramid.h \
    $$PWD/GProcessCannyEdge.h \
    $$PWD/GProcessGettingPixel.h \
    $$PWD/GProcessSettingPixel.h \
    $$PWD/GDraw.h \
    $$PWD/GDrawRgb.h \
    $$PWD/GDrawGray.h \
    $$PWD/GProcessCameraUsb.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GProcessDisplayPicture.cpp \
    $$PWD/GProcessReadVideo.cpp \
    $$PWD/GProcessTrackbarSlider.cpp \
    $$PWD/GProcessSmoothingImage.cpp \
    $$PWD/GProcessImagePyramid.cpp \
    $$PWD/GProcessCannyEdge.cpp \
    $$PWD/GProcessGettingPixel.cpp \
    $$PWD/GProcessSettingPixel.cpp \
    $$PWD/GDraw.cpp \
    $$PWD/GDrawRgb.cpp \
    $$PWD/GDrawGray.cpp \
    $$PWD/GProcessCameraUsb.cpp

